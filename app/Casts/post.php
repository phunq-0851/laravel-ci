<?php

namespace App\Casts;

use App\Post;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Content implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return \App\Address
     */
    public function get($model, $key, $value, $attributes)
    {
        return new Address(
            $attributes['content_line_one'],
            $attributes['content_line_two']
        );
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  \App\Address  $value
     * @param  array  $attributes
     * @return array
     */
    public function set($model, $key, $value, $attributes)
    {
        return [
            'content_line_one' => $value->lineOne,
            'content_line_two' => $value->lineTwo,
        ];
    }
}
