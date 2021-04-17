<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cell extends Model
{

    const COLORS = [
        'primary' => 'Blue',
        'secondary' => 'Grey',
        'success' => 'Green',
        'info' => 'Teal',
        'warning' => 'Orange',
        'danger' => 'Red'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'color'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * When there is no URL added Cell's button should
     * redirect to the Cell's edit page instead.
     *
     * @return string
     */
    public function buttonUrl(): string
    {
        if ($this->url) {
            return $this->url;
        }

        return route('cell.edit', $this);
    }
}
