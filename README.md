# misleading profilling results

the following profiles should code examples which have pretty similar runtime characteristics when run via php CLI, but show vastly different profiles when running thru blackfire.

-> getting vastly different profiles for code which runs nearly identical without blackfire leads to unnecessary optimization work, which does not yield a optimized result. the tooling suggest code would improve when e.g. re-working from symfony/finder to plain directory-iterators, but the end user will not see a difference - which is frustrating.

-> devs worked on a problem which didn't exist

-> the client paid for performance work which did not yield improvements (or only improvements the tooling reports, but does not translate to real world application)

## find

### repro

https://github.com/staabm/hungry-spl-file-info/commit/b1f24c746c77fab019d4945410a2f7c6cd1a88fe


while running the scripts with regular php has nearly the same impact

 
```
➜  hungry-spl-file-info git:(main) ✗ php plain.php 
Elapsed time: 31 ms
CURRENT_AS_PATHNAME: no
Num files 6144
Used memory: 2 MB
➜  hungry-spl-file-info git:(main) php plain.php spl
Elapsed time: 32 ms
CURRENT_AS_PATHNAME: yes
Num files 6144
Used memory: 2 MB
➜  hungry-spl-file-info git:(main) php symfony.php  
Elapsed time: 39 ms
Num files 6115
Used memory: 2 MB
```

when running these 3 scripts thru blackfire, we see a totally different picture

```
➜  hungry-spl-file-info git:(main) ✗ blackfire run php plain.php   
Elapsed time: 76 ms
CURRENT_AS_PATHNAME: no
Num files 6144
Used memory: 4 MB

Wall Time    79.2ms
I/O Wait     4.25ms
CPU Time       75ms
Memory       1.94MB
Network         n/a     n/a     n/a
SQL             n/a     n/a

➜  hungry-spl-file-info git:(main) ✗ blackfire run php plain.php spl
Elapsed time: 84 ms
CURRENT_AS_PATHNAME: yes
Num files 6144
Used memory: 6 MB

CPU Time     81.5ms
Memory       3.66MB
Wall Time    86.7ms
I/O Wait     5.17ms
Network         n/a     n/a     n/a
SQL             n/a     n/a

➜  hungry-spl-file-info git:(main) ✗ blackfire run php symfony.php  
Elapsed time: 386 ms
Num files 6115
Used memory: 6 MB

Memory       3.86MB
Wall Time     388ms
I/O Wait     14.8ms
CPU Time      374ms
Network         n/a     n/a     n/a
SQL             n/a     n/a
```
 

## Setup 

```
php -v
PHP 8.2.11 (cli) (built: Sep 26 2023 11:11:58) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.11, Copyright (c) Zend Technologies
    with blackfire v1.86.3~mac-x64-non_zts82, https://blackfire.io, by Blackfire

blackfire -V
Blackfire version 2.22.0 (c) 2014-2023 Platform.sh (2023-09-28T09:21:28+0000 - dev)
```

running latest macos on a M1 Pro.
