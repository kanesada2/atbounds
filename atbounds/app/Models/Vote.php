<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    /**
     * 記事作成者のリレーションを取得
     *
     * @return belongsTo
     */
    public function relatedVoter(): belongsTo
    {
        return $this->belongsto(User::class, 'voter_id');
    }

    /**
     * 記事作成者のリレーションを取得
     *
     * @return belongsTo
     */
    public function relatedArticle(): belongsTo
    {
        return $this->belongsto(Article::class, 'article_id');
    }
}
