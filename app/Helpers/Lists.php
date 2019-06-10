<?php

namespace App\Helpers;

/**
 * Get the list of category types in an array to make a dropdown menu
 *
 * @return Array
 */



class lists
{

    const CATEGORY_TYPE_BOOK        = 1;
    const CATEGORY_TYPE_ASSET       = 2;
    const CATEGORY_TYPE_HOBBY       = 3;
    const CATEGORY_TYPE_FURNITURE   = 4;
    const CATEGORY_TYPE_CONTAINER   = 5;
    const CATEGORY_TYPE_ELECTRONICS = 6;
    const CATEGORY_TYPE_LOCATION    = 7;
    const CATEGORY_TYPE_ROOM        = 8;

    const DEFAULT_CATEGORY_TYPE = lists::CATEGORY_TYPE_ASSET;

    public static function categoryTypeList()
    {
        $category_types = array(
            ''                      => '',
            lists::CATEGORY_TYPE_BOOK      => __('lists.book'),
            lists::CATEGORY_TYPE_ASSET     => __('lists.asset'),
            lists::CATEGORY_TYPE_HOBBY     => __('lists.hobby'),
            lists::CATEGORY_TYPE_FURNITURE => __('lists.furniture'),
            lists::CATEGORY_TYPE_CONTAINER => __('lists.container'),
        );

        return $category_types;
    }

    public static function defaultCategoryType()
    {
        return lists::DEFAULT_CATEGORY_TYPE;
    }
}
