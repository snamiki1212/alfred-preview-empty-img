## Overview

Open empty img file with Preview App buit-in macOS.

## Usage

Input in Alfred

<img width="684" alt="alfred-img" src="https://user-images.githubusercontent.com/26793088/105624630-2df0b180-5dd8-11eb-9798-f06ee862ed44.png">

and then open preview

<img width="555" alt="Screen Shot 2021-01-24 at 0 11 12" src="https://user-images.githubusercontent.com/26793088/105624708-b2dbcb00-5dd8-11eb-9d84-9e22dc912cb9.png">

## Installation

1. Go to Release page

- [Releases · snamiki1212/alfred-preview-empty-img · GitHub](https://github.com/snamiki1212/alfred-preview-empty-img/releases)

2. DL `***.alfredworkflow` file
3. Double click this file

## Why should we need this workflow?

About Preview App which is built-in macOS, there is NO feature to open the img which is empty.

[How do I start a new blank image page in Preview? - Ask Different](https://apple.stackexchange.com/a/364924)

In this workflow, empty img would be created with buit-in php lib and then open this img with Preview App.

## Options

```zsh
$ preview <width> <height> <file_name>

---

default:
  width:  1200
  height: 1200
  file_name: result.png
```

## LISENCE

MIT
