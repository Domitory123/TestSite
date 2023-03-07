<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class MerchFilter extends AbstractFilter
{

    public const TITLE = 'title';
    public const DESCRIBE = 'describe';
    
    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::DESCRIBE => [$this, 'describe'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }
   
    public function describe(Builder $builder, $value)
    {
        $builder->where('describe', 'like', "%{$value}%");
    }

  
}
