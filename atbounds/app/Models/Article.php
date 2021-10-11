<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * 記事作成者のリレーションを取得
     *
     * @return belongsTo
     */
    public function autor(): belongsTo
    {
        return $this->belongsto(User::class, 'author_id');
    }

    /**
     * コメント・レーティングのリレーションを取得
     * 
     * @return hasMany
     */
    public function votes(): hasMany
    {
        return $this->hasMany(Vote::class);
    }
}
