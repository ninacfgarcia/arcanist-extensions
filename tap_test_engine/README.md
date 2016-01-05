# Arcanist Extensions

AddThis uses certain extensions for [Arcanist](https://github.com/phacility/arcanist).

This submodule is a fork of https://github.com/tagview/arcanist-extensions.git

In the `load` key of your project's `.arcconfig` file:

```json
{
  "project_id": "my-awesome-project",
  "conduit_uri": "https://example.org",

  "load": [
    ".arcanist-extensions/[extension_name]"
  ]
}
```

## Available extensions

### `eslint`

alpha version of [Arcanist ESLint](https://secure.phabricator.com/D12198)

For more information regarding Arcanist linters configuration, access the [Arcanist Lint User Guide](https://secure.phabricator.com/book/phabricator/article/arcanist_lint/).

### `tap_test_engine`

This extension implements a generic [TAP](http://testanything.org/) test engine, so Arcanist may run tests from any tool that has a TAP compatible output.

To use this extension, you must inform the command that will run your tests (just make sure that this command returns a TAP formatted output on `STDOUT`):

```json
{
  "project_id": "my-awesome-project",
  "conduit_uri": "https://example.org",

  "load": [
    ".arcanist-extensions/tap_test_engine"
  ],

  "unit.engine": "TAPTestEngine",
  "unit.engine.tap.command": "bundle exec rake spec"
}
```

# License

(The MIT License)

Copyright (c) 2015 Tagview Tecnologia <team@tagview.com.br>

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
