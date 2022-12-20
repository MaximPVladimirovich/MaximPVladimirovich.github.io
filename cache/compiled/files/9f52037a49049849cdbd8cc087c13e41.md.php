<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/pages/01.blog/blog.md',
    'modified' => 1665247248,
    'size' => 321,
    'data' => [
        'header' => [
            'title' => 'Blog',
            'blog_url' => 'blog',
            'body_classes' => 'header-image fullwidth',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 1.03
            ],
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 5,
                'pagination' => true
            ],
            'feed' => [
                'description' => 'Sample Blog Description',
                'limit' => 10
            ],
            'pagination' => true
        ],
        'frontmatter' => 'title: Blog
blog_url: blog
body_classes: header-image fullwidth

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true

feed:
    description: Sample Blog Description
    limit: 10

pagination: true',
        'markdown' => ''
    ]
];
