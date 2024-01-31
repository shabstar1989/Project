<?php

namespace App\Traits\Post;
trait PostTrait
{
    public const TABLE_NAME = 'posts';

    public const COLUMN_ID = 'id';
    public const COLUMN_USER_ID = 'user_id';
    public const COLUMN_TITLE = 'title';
    public const COLUMN_IMAGE = 'image';
    public const COLUMN_CONTENT = 'content';
}
