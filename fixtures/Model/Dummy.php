<?php

/*
 * This file is part of the EloquentSerializer package.
 * 
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fidry\EloquentSerializer\Model;

use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @property int                id
 * @property string             name
 * @property string             email
 * @property bool               casted_bool
 * @property \DateTimeInterface created_at
 * @property string             password
 * @property string             remember_token
 * @property AnotherDummy       anotherDummy
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class Dummy extends EloquentModel
{
    /**
     * @inheritdoc
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'casted_bool',
        'password',
        'created_at',
    ];

    /**
     * @inheritdoc
     */
    protected $visible = [
        'inexistent_visible_property',
    ];

    /**
     * @inheritdoc
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'casted_bool' => 'boolean',
    ];

    /**
     * @inheritdoc
     */
    protected $appends = [
        'inexistent_appended_property',
    ];

    /**
     * @inheritdoc
     */
    public $timestamps = false;

    /**
     * @inheritdoc
     */
    protected $dates = [
        'created_at',
    ];

    public function anotherDummy()
    {
        return $this->belongsTo(AnotherDummy::class);
    }
}
