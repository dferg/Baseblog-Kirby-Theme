<?php if(!defined('KIRBY')) exit ?>

# article.text blueprint

title: LINK POST
pages: false
files: true

fields:
    title:
        label: Site Title
        type: text
    description:
        label: Site Description
        type: text
    linktitle: 
        label: Link Title
        type: text
        required: true
    customlink: 
        label: Custom Link
        type: text
        validate: url
        required: true
    date:
        label: Date
        type: date
        required: true
    categories:
        label: Category
        type: text
        required: true
    text:
        label: Post
        type: textarea
        size: large
        buttons: true
