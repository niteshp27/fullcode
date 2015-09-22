Welcome to Git (version 1.9.5-preview20150319)


Run 'git help git' to display the help index.
Run 'git help <command>' to display help for specific commands.

*****************************NiteshP@NITESHPX01 ~
$ cd d:

*****************************NiteshP@NITESHPX01 /d
$ cd nitesh

*****************************NiteshP@NITESHPX01 /d/nitesh
$ cd dist

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ git init
Reinitialized existing Git repository in d:/nitesh/dist/.git/

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ git add .
warning: LF will be replaced by CRLF in commons/font/material-design-icons/Mater
ial-Design-Icons.svg.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in commons/js/angular-ui-router.min.js.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in commons/js/angular.min.js.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in commons/js/app-bundle.js.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in commons/js/jquery.min.js.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in commons/js/modernizr.min.js.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in commons/js/require.js.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in commons/scss/main.css.
The file will have its original line endings in your working directory.

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ git commit -m "my first commit"
On branch master
Your branch is up-to-date with 'origin/master'.

nothing to commit, working directory clean

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ heroku create
Creating intense-stream-9604... done, stack is cedar-14
https://intense-stream-9604.herokuapp.com/ | https://git.heroku.com/intense-stre
am-9604.git

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ heroku login
Enter your Heroku credentials.
Email: niteshp27@gmail.com
Password (typing will be hidden):
Authentication successful.

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ heroku git:remote -a intense-stream-9604
set git remote heroku to https://git.heroku.com/intense-stream-9604.git

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ git remote -v
heroku  https://git.heroku.com/intense-stream-9604.git (fetch)
heroku  https://git.heroku.com/intense-stream-9604.git (push)
origin  https://niteshp27@bitbucket.org/niteshp27/fullcode.git (fetch)
origin  https://niteshp27@bitbucket.org/niteshp27/fullcode.git (push)

*****************************NiteshP@NITESHPX01 /d/nitesh/dist (master)
$ git push heroku master
Counting objects: 46, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (41/41), done.
Writing objects: 100% (46/46), 1.25 MiB | 83.00 KiB/s, done.
Total 46 (delta 1), reused 0 (delta 0)
remote: Compressing source files... done.
remote: Building source:
remote:
remote:
remote:  !     Push rejected, no Cedar-supported app detected
remote: HINT: This occurs when Heroku cannot detect the buildpack
remote:       to use for this application automatically.
remote: See https://devcenter.heroku.com/articles/buildpacks
remote:
remote: Verifying deploy....
remote:
remote: !       Push rejected to intense-stream-9604.
remote:
To https://git.heroku.com/intense-stream-9604.git
 ! [remote rejected] master -> master (pre-receive hook declined)
error: failed to push some refs to 'https://git.heroku.com/intense-stream-9604.g
it'

******Renamed index.html file to index.php

NiteshP@NITESHPX01 /d/heroku (master)
$ git push heroku master
Counting objects: 5, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 355 bytes | 0 bytes/s, done.
Total 3 (delta 2), reused 0 (delta 0)
remote: Compressing source files... done.
remote: Building source:
remote:
remote: -----> PHP app detected
remote:
remote:  !     WARNING: No 'composer.json' found.
remote:        Using 'index.php' to declare PHP applications is considered legac
y
remote:        functionality and may lead to unexpected behavior.
remote:
remote: -----> No runtime required in 'composer.json', defaulting to PHP 5.6.12.

remote: -----> Installing system packages...
remote:        - PHP 5.6.12
remote:        - Apache 2.4.10
remote:        - Nginx 1.6.0
remote: -----> Installing PHP extensions...
remote:        - zend-opcache (automatic; bundled)
remote: -----> Installing dependencies...
remote:        Composer version 1.0.0-alpha10 2015-04-14 21:18:51
remote: -----> Preparing runtime environment...
remote:        NOTICE: No Procfile, using 'web: vendor/bin/heroku-php-apache2'.
remote: -----> Discovering process types
remote:        Procfile declares types -> web
remote:
remote: -----> Compressing... done, 73.9MB
remote: -----> Launching... done, v6
remote:        https://secret-shelf-2916.herokuapp.com/ deployed to Heroku
remote:
remote: Verifying deploy.... done.
To https://git.heroku.com/secret-shelf-2916.git
   a53d22a..2c816de  master -> master

############################################################################################
Push to bitbucket:-
-For cloning use the url "https://niteshp27@bitbucket.org/niteshp27/fullcode.git" from the website

*****************************
C:\Users\NiteshP\Dropbox\fullcode\dist>git clone git clone https://niteshp27@bit
bucket.org/niteshp27/fullcode.git
Too many arguments.

usage: git clone [options] [--] <repo> [<dir>]

    -v, --verbose         be more verbose
    -q, --quiet           be more quiet
    --progress            force progress reporting
    -n, --no-checkout     don't create a checkout
    --bare                create a bare repository
    --mirror              create a mirror repository (implies bare)
    -l, --local           to clone from a local repository
    --no-hardlinks        don't use local hardlinks, always copy
    -s, --shared          setup as shared repository
    --recursive           initialize submodules in the clone
    --recurse-submodules  initialize submodules in the clone
    --template <template-directory>
                          directory from which templates will be used
    --reference <repo>    reference repository
    -o, --origin <name>   use <name> instead of 'origin' to track upstream
    -b, --branch <branch>
                          checkout <branch> instead of the remote's HEAD
    -u, --upload-pack <path>
                          path to git-upload-pack on the remote
    --depth <depth>       create a shallow clone of that depth
    --single-branch       clone only one branch, HEAD or --branch
    --separate-git-dir <gitdir>
                          separate git dir from working tree
    -c, --config <key=value>
                          set config inside the new repository

*****************************
C:\Users\NiteshP\Dropbox\fullcode\dist>git add .

*****************************
C:\Users\NiteshP\Dropbox\fullcode\dist>git commit -m "second commit"
[master 33b8e61] second commit
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 readme file.txt

*****************************
C:\Users\NiteshP\Dropbox\fullcode\dist>git push
warning: push.default is unset; its implicit value is changing in
Git 2.0 from 'matching' to 'simple'. To squelch this message
and maintain the current behavior after the default changes, use:

  git config --global push.default matching

To squelch this message and adopt the new behavior now, use:

  git config --global push.default simple

When push.default is set to 'matching', git will push local branches
to the remote branches that already exist with the same name.

In Git 2.0, Git will default to the more conservative 'simple'
behavior, which only pushes the current branch to the corresponding
remote branch that 'git pull' uses to update the current branch.

See 'git help config' and search for 'push.default' for further information.
(the 'simple' mode was introduced in Git 1.7.11. Use the similar mode
'current' instead of 'simple' if you sometimes use older versions of Git)

Password for 'https://niteshp27@bitbucket.org':
Counting objects: 4, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 266 bytes | 0 bytes/s, done.
Total 3 (delta 1), reused 0 (delta 0)
To https://niteshp27@bitbucket.org/niteshp27/fullcode.git
   4af260c..33b8e61  master -> master

*****************************Done