<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class MerchFilter extends AbstractFilter
{

    public const TITLE = 'title';
    public const DESCRIBE = 'describe';
    public const SORT = 'sort';
    
    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::DESCRIBE => [$this, 'describe'],
            self::SORT => [$this, 'sort'],
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

    public function sort(Builder $builder, $value)
    {
        if ($value=="ascending")
        $builder->orderByDesc('title')->get();
           else
        $builder->orderBy('title')->get();
          
    }
  
}
