#!/usr/bin/python

import os
import sys
import subprocess

def exec_cmd(cmd):
	p = subprocess.Popen([cmd], shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
	out,err = p.communicate()
	print out,err
	if not err:
		print out
	else:
		if "Nothing to install" in err: # wierd composer err msg
			print out
		elif "npm WARN" in err: # yet another wierd error msg
			print out
		else:
			msg("Command failed, message: %s" % (err),"fail")

def msg(string,type=""):
	end = '\033[0m'
	if type == "ok":
		color = '\033[92m'
	elif type == "fail":
		color = '\033[91m'
	else:
		color = '\033[94m'
	print color+string+end


def main():

	cwd = __file__.replace(os.path.basename(__file__),"")
	if len(sys.argv) < 2:
		msg("[!] Error, you need to specify the new project name.","fail")
		print """
		usage: %s <theme_name>
		""" % (__file__)
		sys.exit(1)
	else:
		theme = sys.argv[1]
	msg("Starting Setup")
	orig_theme = cwd+"web/app/themes/wn-boilerplate-theme/"
	new_theme = orig_theme.replace("wn-boilerplate-theme",theme)
	
	msg("Renaming theme to: %s" % (theme))
	exec_cmd("mv %s %s" % (orig_theme,new_theme))
	exec_cmd("cat %sstyle.css | sed 's/Webnerds Wordpress Boilerplate/%s/g' > %sstyle.css.new && mv %sstyle.css.new %sstyle.css" % (new_theme,theme,new_theme,new_theme,new_theme))

	msg("Resetting git repo")
	exec_cmd("cd %s && rm -fr .git" % (cwd))
	exec_cmd("cd %s && git init" % (cwd))

	msg("Starting Composer")
	exec_cmd("cd %s && composer update" % (cwd))
	msg("Composer complete","ok")

	msg("Starting npm")
	exec_cmd("cd %s && npm install" % (new_theme))
	msg("npm complete","ok")

	msg("Starting bower")
	exec_cmd("cd %s && bower install" % (new_theme))
	msg("Bower complete","ok")

	
	'''
	msg("Starting Gulp")
	exec_cmd("cd %s && gulp" % (new_theme))
	msg("Gulp complete","ok")
	'''

	msg("Creating symlink")
	exec_cmd('[ -h "%stheme" ] && rm %stheme && ln -s %s %stheme || ln -s %s %stheme' % (cwd,cwd,new_theme,cwd,new_theme,cwd))
	

	

if __name__ == "__main__":
	main()




