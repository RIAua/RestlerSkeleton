RestlerSkeleton
=======================

Introduction
------------
This is a simple, skeleton application using the Restler CRUD layer. This application 
is meant to be used as a starting place for those looking to get their feet wet with 
Restler.


Installation
------------
nginx (with php-fpm) configuration example: https://github.com/RIAua/RestlerSkeleton/wiki/nginx-configuration


The easiest way to get a working copy of this project is to do a recursive
clone:

    git clone --recursive git://github.com/RIAua/RestlerSkeleton.git <new_folder_name>

After the clone is complete, set up a virtual host to point to the public/
directory of the project and you should be ready to go!

If you're wondering what the `--recursive` flag is, keep reading:

Used Submodules
--------------

    https://github.com/RIAua/Ria - Ria.ua simple libraries
    https://github.com/AGvin/Restler - fork of https://github.com/Luracast/Restler with pagination support

Git Submodules
--------------
This project makes use of [Git submodules](http://book.git-scm.com/5_submodules.html).
Utilizing Git submodules allows us to reference an exact commit in the upstream
[Luracast/Restler](https://github.com/Luracast/Restler) repository and ensure
that those who have cloned the project have that same commit checked out. This
provides several benefits:

* Developers do not have to worry about which commit of the Restler project to have
  checked out for this project to work.
* No additional steps to "install" Restler are needed; it "just works"
  after a cloning the project.

There are a couple of mild caveats to be aware of:

* Be sure to always run `git submodule update` after pulling, as merge/rebase
  does not automatically update the checked out commit in submodules if it has
  been changed.
* The initial clone will be a bit slower, due to it having to pull down a
  separate copy of Restler from what you already have.

Readme.md
--------------
This document based on https://github.com/zendframework/ZendSkeletonApplication/blob/master/README.md
:)