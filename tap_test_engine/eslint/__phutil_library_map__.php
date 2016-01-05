<?php

/**
 * patching arc eslint into an extension so we can
 * version control it in Site development
 */

phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' =>
  array(
    'ArcanistESLintLinter' => 'src/ArcanistESLintLinter.php',
  ),
  'function' =>
  array(
  ),
  'xmap' =>
  array(
    'ArcanistESLintLinter' => 'ArcanistExternalLinter',
  ),
));
