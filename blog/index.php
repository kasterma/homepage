<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

  <title>
    Zotskolf: a additional opportunity to be hopelessly wrong.
  </title>

  <meta http-equiv="content-type" 
        content="text/html; charset=ISO-8859-1" />

  <meta name="description" 
        content="Bart Kastermans' blog" />

  <meta name="keywords" 
        content="Bart, Kastermans, Bart Kastermans, blog" />

  <link rel="stylesheet" 
        type="text/css"
        href="bkstyle.php" />

   <?php include ("menudf.incl"); ?>

   <?php writemenufunctions ($onbartk);
   echo "\n";
    writemenufunctions ($elsewhere); ?>

</head>

<body>

<?php
$active = "zotskolf";
include ('menu.php');
?>

<div class="content_ep">

  <div class="blogbox">
    <h2 class="blogtitle">
      raising the o in conso
    </h2>

    <p>
      Recently I learned how to replace keywords by greek letters in
      code through some functions in .emacs
      (see <a href="http://blog.jayfields.com/2013/05/emacs-lisp-font-lock-for-clojures.html">Jay
      Fields blog</a>).  Recently I have also been playing with core.logic.
      The combination of these two just resulted in a fun Friday evening.
    </p>

    <center>
    <img src="raisedos.png" />
    </center>

    <p>
      For this the incantations are like the following:
    </p>

<code>
 (font-lock-add-keywords
  nil
  `(("\\(empty\\|cons\\|rember\\|nil\\)\\(o\\)"
     (2 '(face default display (raise 0.2))))))
</code>
  </div>

  <div class="blogbox">
    <h2 class="blogtitle">
      core.logic extravaganza
    </h2>

    <p>
      I have been interested in learning some logic programming for a
      while, but never quite had the time to get into it.  Not having
      <em>any</em> logic programming experience, there is a steep
      learning curve.  Since my job is working with clojure, learning
      core.logic seems to be the way to go.  To really get a good
      start I took Friday off, leading to four essentially full days
      I could spend on this.
    </p>

    <p>
      The results are somewhat mixed; I had certainly hoped to make
      more progress.  Lack of documentation, or of me finding good
      documentation sometimes resulted in rather slow going.
    </p>

    <p>
      I did manage to work through a decent set of problems posed for
      prolog (my solutions are in
      the <a href="https://github.com/kasterma/core.logic99">
      core.logic99</a> repository, where more will be added).  I also
      read the reasoned schemer, and made very good progress with
      understanding it (though it seems a sometimes strange book).
      Some of the questions that I didn't answer, I made into gists,
      see <a href="https://gist.github.com/kasterma">kasterma
      gists</a>.  These I plan to update with comments as I find more
      info.  I read decent parts of the core.logic code, and am
      starting to make some sense of parts of it.  Finally, I think I
      am in a good position to solve a problem I have in my job with
      this.
    </p>

    <p>
      I did not manage to solve as many of the prolog problems
      as I had hoped; as usual at times simple issues (and often not
      related to the problem at hand) caused big delays.  The
      core.logic finite domain (fd.clj) stuff is a complete mystery
      to me.  And I got nowhere close to starting to consider what
      I had as a bonus idea; that is to make some pgm code use some
      core.logic techniques.
    </p>

    <p>
      The real result of this is that I am in a good position to keep
      working on this in the smaller amounts of time I usually have
      available.  Certainly I'll consider doing different
      "extravaganza" for other ideas/software/methods to get a good
      start.
    </p>
  </div>


  <div class="blogbox">
    <h2 class="blogtitle">
      Simpson's paradox I
    </h2>

    <p>
      Yesterday while on wikipedia I run into a fascinating article,
      <a href="http://en.wikipedia.org/wiki/Simpson's_paradox">
	     Simpson's paradox</a>.  Understanding this and knowing
      how to deal with it well, are going to take me a little.
    </p>

    <p>
      While thinking about it, I wrote some simple R code to extract a
      subset with positive trend from a set of points with negative
      trend.  This being possible, though obvious, seems to me to be
      the main difficulty in dealing with the paradox.
    </p>

    <script src="https://gist.github.com/kasterma/5472744.js"></script>

    <center>
    <img src="simpson.png"/>
    </center>
  </div>

  <div class="blogbox">
    <h2 class="blogtitle">
      Travis Continuous Integration.
    </h2>

    <p>
      On some projects I follow there is an indicator of the success
      of the current build.  This feels like a nice indication of
      the issues that can be expected (or hopefully not) when trying
      the project yourself. For this reason I looked at
      <a href="https://travis-ci.org/">Travis CI</a>.  The process of
      starting to use Travis is really simple (in particular if you
      know how to read; I temporarily failed at that and struggled a
      little).
    </p>

    <p>
      The <a href="http://about.travis-ci.org/docs/user/getting-started/">
	      getting started</a> explains the steps quite well.  Then
     
      to use clojure is also immediate following their instructions.
	      Important to observe, and what I missed, is that in
	      scripts for testing you should use the command lein2
	      (e.g. script: lein2 midje is what should be in the
	      .travis.yml file for midje testing with leinigen version
	      2).
    </p>

    <p>
       Now I have it working on <a href="https://github.com/kasterma/dotto">
       dotto</a>.  Remains to actually make that project useable.
    </p>
  </div>

 <div class="blogbox">
   <h2 class="blogtitle">
     Stdout performance surprise.
   </h2>

   <p>
     Recently while working on making some code performant and correct
     I had added a rather sizeable amount of logging. The simple
     strategy was just to write to stdout and then piping this to a
     file.  The bug fairly quickly showed itself, but the performance
     was strangely slowed.  A colleague suggested that instead of
     printing to stdout and then piping to a file I just write to the
     file directly.
   </p>

   <p>
     Turns out, this had a <em>huge</em> performance impact.
   </p>

   <p>
     See the simple code at
     <a href="https://github.com/kasterma/stdouttiming/blob/master/src/stdouttiming/core.clj">github:stdouttiming</a>
     where I reproduce the effect with all superfluous code removed.
     The first function just writes to stdout, the second opens a file
     and writes to it repeatedly, the third repeatedly opens the file,
     writes to it, and closes the file.
   </p>

   <p>
     The relevant output follows here, where in particular it is amusing
     to me that repeatedly opening the file is faster than writing to
     stdout.  I think the effect might be due to excessive context
     switching, but I am not sure how to test this hypothesis.
   </p>

   <pre>
~/projects/stdouttiming  :)    19:40:12 bassie
lein run -m stdouttiming.core --iterations 50000 > collectout.txt
~/projects/stdouttiming  :)    19:41:23 bassie
tail -n 20 collectout.txt
line49995
line49996
line49997
line49998
line49999
2013-Apr-08 19:41:16 +0200 bassie.local INFO [stdouttiming.core] - Profiling :taoensso.timbre.profiling/to-stdout
          Name  Calls       Min        Max       MAD      Mean   Time% Time
  [Clock] Time                                                     100 42.4s
Accounted Time                                                       0 0ns

2013-Apr-08 19:41:16 +0200 bassie.local INFO [stdouttiming.core] - Profiling :taoensso.timbre.profiling/to-file
          Name  Calls       Min        Max       MAD      Mean   Time% Time
  [Clock] Time                                                     100 64ms
Accounted Time                                                       0 0ns

2013-Apr-08 19:41:23 +0200 bassie.local INFO [stdouttiming.core] - Profiling :taoensso.timbre.profiling/to-file-spat
          Name  Calls       Min        Max       MAD      Mean   Time% Time
  [Clock] Time                                                     100 7.1s
Accounted Time                                                       0 0ns

   </pre>
 </div>

 <div class="blogbox">
   <h2 class="blogtitle">
     About this blog
   </h2>
   <p>
     I started this part of my website on April 4, 2013.  The plan is
     to have something bloglike where I can write some experiences
     with programming and related matters.  The subtitle "an
     additional opportunity to be hopelessly wrong" is to be taken as
     serious as possible.  Some things written here will have been
     thought about deeply, others have been barely thought about long
     enough to touch the keyboard to make them appear here.
   </p>

   <p>
    Btw: <a href="http://nl.wikipedia.org/wiki/Zotskolf">Zotskolf</a> is
    the Dutch word for <a href="http://en.wikipedia.org/wiki/Marotte">
    Marotte</a>, a fool's sceptre.
   </p>
 </div>

</div>

</body>

</html>
