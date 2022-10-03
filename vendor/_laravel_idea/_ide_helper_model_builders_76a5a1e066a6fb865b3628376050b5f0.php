<?php //8c342783b31e20a33d5842f64f625868
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Brand;
    use App\Models\PaymentMethod;
    use App\Models\Product;
    use App\Models\ProductImage;
    use App\Models\ProductStock;
    use App\Models\Promo;
    use App\Models\Transaction;
    use App\Models\TransactionDetail;
    use App\Models\User;
    use App\Models\UserAddress;
    use App\Models\UserPaymentMethod;
    use App\Models\UserWishlist;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Brand|null getOrPut($key, $value)
     * @method Brand|$this shift(int $count = 1)
     * @method Brand|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Brand|$this pop(int $count = 1)
     * @method Brand|null pull($key, $default = null)
     * @method Brand|null last(callable $callback = null, $default = null)
     * @method Brand|$this random(int|null $number = null)
     * @method Brand|null sole($key = null, $operator = null, $value = null)
     * @method Brand|null get($key, $default = null)
     * @method Brand|null first(callable $callback = null, $default = null)
     * @method Brand|null firstWhere(string $key, $operator = null, $value = null)
     * @method Brand|null find($key, $default = null)
     * @method Brand[] all()
     */
    class _IH_Brand_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Brand[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Brand_QB whereId($value)
     * @method _IH_Brand_QB whereName($value)
     * @method _IH_Brand_QB whereImage($value)
     * @method _IH_Brand_QB whereDescription($value)
     * @method _IH_Brand_QB whereCreatedAt($value)
     * @method _IH_Brand_QB whereUpdatedAt($value)
     * @method Brand baseSole(array|string $columns = ['*'])
     * @method Brand create(array $attributes = [])
     * @method _IH_Brand_C|Brand[] cursor()
     * @method Brand|null|_IH_Brand_C|Brand[] find($id, array $columns = ['*'])
     * @method _IH_Brand_C|Brand[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrFail($id, array $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrNew($id, array $columns = ['*'])
     * @method Brand first(array|string $columns = ['*'])
     * @method Brand firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Brand firstOrCreate(array $attributes = [], array $values = [])
     * @method Brand firstOrFail(array $columns = ['*'])
     * @method Brand firstOrNew(array $attributes = [], array $values = [])
     * @method Brand firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Brand forceCreate(array $attributes)
     * @method _IH_Brand_C|Brand[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Brand_C|Brand[] get(array|string $columns = ['*'])
     * @method Brand getModel()
     * @method Brand[] getModels(array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] hydrate(array $items)
     * @method Brand make(array $attributes = [])
     * @method Brand newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Brand[]|_IH_Brand_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Brand[]|_IH_Brand_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Brand sole(array|string $columns = ['*'])
     * @method Brand updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Brand_QB extends _BaseBuilder {}
    
    /**
     * @method PaymentMethod|null getOrPut($key, $value)
     * @method PaymentMethod|$this shift(int $count = 1)
     * @method PaymentMethod|null firstOrFail($key = null, $operator = null, $value = null)
     * @method PaymentMethod|$this pop(int $count = 1)
     * @method PaymentMethod|null pull($key, $default = null)
     * @method PaymentMethod|null last(callable $callback = null, $default = null)
     * @method PaymentMethod|$this random(int|null $number = null)
     * @method PaymentMethod|null sole($key = null, $operator = null, $value = null)
     * @method PaymentMethod|null get($key, $default = null)
     * @method PaymentMethod|null first(callable $callback = null, $default = null)
     * @method PaymentMethod|null firstWhere(string $key, $operator = null, $value = null)
     * @method PaymentMethod|null find($key, $default = null)
     * @method PaymentMethod[] all()
     */
    class _IH_PaymentMethod_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaymentMethod[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PaymentMethod_QB whereId($value)
     * @method _IH_PaymentMethod_QB whereName($value)
     * @method _IH_PaymentMethod_QB whereImage($value)
     * @method _IH_PaymentMethod_QB whereStatus($value)
     * @method _IH_PaymentMethod_QB whereCreatedAt($value)
     * @method _IH_PaymentMethod_QB whereUpdatedAt($value)
     * @method PaymentMethod baseSole(array|string $columns = ['*'])
     * @method PaymentMethod create(array $attributes = [])
     * @method _IH_PaymentMethod_C|PaymentMethod[] cursor()
     * @method PaymentMethod|null|_IH_PaymentMethod_C|PaymentMethod[] find($id, array $columns = ['*'])
     * @method _IH_PaymentMethod_C|PaymentMethod[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method PaymentMethod|_IH_PaymentMethod_C|PaymentMethod[] findOrFail($id, array $columns = ['*'])
     * @method PaymentMethod|_IH_PaymentMethod_C|PaymentMethod[] findOrNew($id, array $columns = ['*'])
     * @method PaymentMethod first(array|string $columns = ['*'])
     * @method PaymentMethod firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method PaymentMethod firstOrCreate(array $attributes = [], array $values = [])
     * @method PaymentMethod firstOrFail(array $columns = ['*'])
     * @method PaymentMethod firstOrNew(array $attributes = [], array $values = [])
     * @method PaymentMethod firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaymentMethod forceCreate(array $attributes)
     * @method _IH_PaymentMethod_C|PaymentMethod[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaymentMethod_C|PaymentMethod[] get(array|string $columns = ['*'])
     * @method PaymentMethod getModel()
     * @method PaymentMethod[] getModels(array|string $columns = ['*'])
     * @method _IH_PaymentMethod_C|PaymentMethod[] hydrate(array $items)
     * @method PaymentMethod make(array $attributes = [])
     * @method PaymentMethod newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaymentMethod[]|_IH_PaymentMethod_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PaymentMethod[]|_IH_PaymentMethod_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaymentMethod sole(array|string $columns = ['*'])
     * @method PaymentMethod updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PaymentMethod_QB active()
     */
    class _IH_PaymentMethod_QB extends _BaseBuilder {}
    
    /**
     * @method ProductImage|null getOrPut($key, $value)
     * @method ProductImage|$this shift(int $count = 1)
     * @method ProductImage|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ProductImage|$this pop(int $count = 1)
     * @method ProductImage|null pull($key, $default = null)
     * @method ProductImage|null last(callable $callback = null, $default = null)
     * @method ProductImage|$this random(int|null $number = null)
     * @method ProductImage|null sole($key = null, $operator = null, $value = null)
     * @method ProductImage|null get($key, $default = null)
     * @method ProductImage|null first(callable $callback = null, $default = null)
     * @method ProductImage|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductImage|null find($key, $default = null)
     * @method ProductImage[] all()
     */
    class _IH_ProductImage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductImage[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductImage_QB whereId($value)
     * @method _IH_ProductImage_QB whereProductId($value)
     * @method _IH_ProductImage_QB whereImage($value)
     * @method _IH_ProductImage_QB whereCreatedAt($value)
     * @method _IH_ProductImage_QB whereUpdatedAt($value)
     * @method ProductImage baseSole(array|string $columns = ['*'])
     * @method ProductImage create(array $attributes = [])
     * @method _IH_ProductImage_C|ProductImage[] cursor()
     * @method ProductImage|null|_IH_ProductImage_C|ProductImage[] find($id, array $columns = ['*'])
     * @method _IH_ProductImage_C|ProductImage[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductImage|_IH_ProductImage_C|ProductImage[] findOrFail($id, array $columns = ['*'])
     * @method ProductImage|_IH_ProductImage_C|ProductImage[] findOrNew($id, array $columns = ['*'])
     * @method ProductImage first(array|string $columns = ['*'])
     * @method ProductImage firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductImage firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductImage firstOrFail(array $columns = ['*'])
     * @method ProductImage firstOrNew(array $attributes = [], array $values = [])
     * @method ProductImage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductImage forceCreate(array $attributes)
     * @method _IH_ProductImage_C|ProductImage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductImage_C|ProductImage[] get(array|string $columns = ['*'])
     * @method ProductImage getModel()
     * @method ProductImage[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductImage_C|ProductImage[] hydrate(array $items)
     * @method ProductImage make(array $attributes = [])
     * @method ProductImage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductImage[]|_IH_ProductImage_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductImage[]|_IH_ProductImage_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductImage sole(array|string $columns = ['*'])
     * @method ProductImage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductImage_QB extends _BaseBuilder {}
    
    /**
     * @method ProductStock|null getOrPut($key, $value)
     * @method ProductStock|$this shift(int $count = 1)
     * @method ProductStock|null firstOrFail($key = null, $operator = null, $value = null)
     * @method ProductStock|$this pop(int $count = 1)
     * @method ProductStock|null pull($key, $default = null)
     * @method ProductStock|null last(callable $callback = null, $default = null)
     * @method ProductStock|$this random(int|null $number = null)
     * @method ProductStock|null sole($key = null, $operator = null, $value = null)
     * @method ProductStock|null get($key, $default = null)
     * @method ProductStock|null first(callable $callback = null, $default = null)
     * @method ProductStock|null firstWhere(string $key, $operator = null, $value = null)
     * @method ProductStock|null find($key, $default = null)
     * @method ProductStock[] all()
     */
    class _IH_ProductStock_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductStock[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductStock_QB whereId($value)
     * @method _IH_ProductStock_QB whereProductId($value)
     * @method _IH_ProductStock_QB whereSize($value)
     * @method _IH_ProductStock_QB whereStock($value)
     * @method _IH_ProductStock_QB whereCreatedAt($value)
     * @method _IH_ProductStock_QB whereUpdatedAt($value)
     * @method ProductStock baseSole(array|string $columns = ['*'])
     * @method ProductStock create(array $attributes = [])
     * @method _IH_ProductStock_C|ProductStock[] cursor()
     * @method ProductStock|null|_IH_ProductStock_C|ProductStock[] find($id, array $columns = ['*'])
     * @method _IH_ProductStock_C|ProductStock[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method ProductStock|_IH_ProductStock_C|ProductStock[] findOrFail($id, array $columns = ['*'])
     * @method ProductStock|_IH_ProductStock_C|ProductStock[] findOrNew($id, array $columns = ['*'])
     * @method ProductStock first(array|string $columns = ['*'])
     * @method ProductStock firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method ProductStock firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductStock firstOrFail(array $columns = ['*'])
     * @method ProductStock firstOrNew(array $attributes = [], array $values = [])
     * @method ProductStock firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductStock forceCreate(array $attributes)
     * @method _IH_ProductStock_C|ProductStock[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductStock_C|ProductStock[] get(array|string $columns = ['*'])
     * @method ProductStock getModel()
     * @method ProductStock[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductStock_C|ProductStock[] hydrate(array $items)
     * @method ProductStock make(array $attributes = [])
     * @method ProductStock newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductStock[]|_IH_ProductStock_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductStock[]|_IH_ProductStock_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductStock sole(array|string $columns = ['*'])
     * @method ProductStock updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductStock_QB extends _BaseBuilder {}
    
    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, $default = null)
     * @method Product|null last(callable $callback = null, $default = null)
     * @method Product|$this random(int|null $number = null)
     * @method Product|null sole($key = null, $operator = null, $value = null)
     * @method Product|null get($key, $default = null)
     * @method Product|null first(callable $callback = null, $default = null)
     * @method Product|null firstWhere(string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Product_QB whereId($value)
     * @method _IH_Product_QB whereName($value)
     * @method _IH_Product_QB whereBrandId($value)
     * @method _IH_Product_QB whereDescription($value)
     * @method _IH_Product_QB whereCreatedAt($value)
     * @method _IH_Product_QB whereUpdatedAt($value)
     * @method _IH_Product_QB wherePrice($value)
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Product_QB extends _BaseBuilder {}
    
    /**
     * @method Promo|null getOrPut($key, $value)
     * @method Promo|$this shift(int $count = 1)
     * @method Promo|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Promo|$this pop(int $count = 1)
     * @method Promo|null pull($key, $default = null)
     * @method Promo|null last(callable $callback = null, $default = null)
     * @method Promo|$this random(int|null $number = null)
     * @method Promo|null sole($key = null, $operator = null, $value = null)
     * @method Promo|null get($key, $default = null)
     * @method Promo|null first(callable $callback = null, $default = null)
     * @method Promo|null firstWhere(string $key, $operator = null, $value = null)
     * @method Promo|null find($key, $default = null)
     * @method Promo[] all()
     */
    class _IH_Promo_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Promo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Promo_QB whereId($value)
     * @method _IH_Promo_QB whereName($value)
     * @method _IH_Promo_QB whereDescription($value)
     * @method _IH_Promo_QB whereImage($value)
     * @method _IH_Promo_QB whereType($value)
     * @method _IH_Promo_QB whereValue($value)
     * @method _IH_Promo_QB whereCreatedAt($value)
     * @method _IH_Promo_QB whereUpdatedAt($value)
     * @method Promo baseSole(array|string $columns = ['*'])
     * @method Promo create(array $attributes = [])
     * @method _IH_Promo_C|Promo[] cursor()
     * @method Promo|null|_IH_Promo_C|Promo[] find($id, array $columns = ['*'])
     * @method _IH_Promo_C|Promo[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Promo|_IH_Promo_C|Promo[] findOrFail($id, array $columns = ['*'])
     * @method Promo|_IH_Promo_C|Promo[] findOrNew($id, array $columns = ['*'])
     * @method Promo first(array|string $columns = ['*'])
     * @method Promo firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Promo firstOrCreate(array $attributes = [], array $values = [])
     * @method Promo firstOrFail(array $columns = ['*'])
     * @method Promo firstOrNew(array $attributes = [], array $values = [])
     * @method Promo firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Promo forceCreate(array $attributes)
     * @method _IH_Promo_C|Promo[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Promo_C|Promo[] get(array|string $columns = ['*'])
     * @method Promo getModel()
     * @method Promo[] getModels(array|string $columns = ['*'])
     * @method _IH_Promo_C|Promo[] hydrate(array $items)
     * @method Promo make(array $attributes = [])
     * @method Promo newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Promo[]|_IH_Promo_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Promo[]|_IH_Promo_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Promo sole(array|string $columns = ['*'])
     * @method Promo updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Promo_QB extends _BaseBuilder {}
    
    /**
     * @method TransactionDetail|null getOrPut($key, $value)
     * @method TransactionDetail|$this shift(int $count = 1)
     * @method TransactionDetail|null firstOrFail($key = null, $operator = null, $value = null)
     * @method TransactionDetail|$this pop(int $count = 1)
     * @method TransactionDetail|null pull($key, $default = null)
     * @method TransactionDetail|null last(callable $callback = null, $default = null)
     * @method TransactionDetail|$this random(int|null $number = null)
     * @method TransactionDetail|null sole($key = null, $operator = null, $value = null)
     * @method TransactionDetail|null get($key, $default = null)
     * @method TransactionDetail|null first(callable $callback = null, $default = null)
     * @method TransactionDetail|null firstWhere(string $key, $operator = null, $value = null)
     * @method TransactionDetail|null find($key, $default = null)
     * @method TransactionDetail[] all()
     */
    class _IH_TransactionDetail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TransactionDetail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TransactionDetail_QB whereId($value)
     * @method _IH_TransactionDetail_QB whereTransactionId($value)
     * @method _IH_TransactionDetail_QB whereBrandId($value)
     * @method _IH_TransactionDetail_QB whereProductId($value)
     * @method _IH_TransactionDetail_QB whereStockId($value)
     * @method _IH_TransactionDetail_QB whereQuantity($value)
     * @method _IH_TransactionDetail_QB whereAmount($value)
     * @method _IH_TransactionDetail_QB whereCreatedAt($value)
     * @method _IH_TransactionDetail_QB whereUpdatedAt($value)
     * @method TransactionDetail baseSole(array|string $columns = ['*'])
     * @method TransactionDetail create(array $attributes = [])
     * @method _IH_TransactionDetail_C|TransactionDetail[] cursor()
     * @method TransactionDetail|null|_IH_TransactionDetail_C|TransactionDetail[] find($id, array $columns = ['*'])
     * @method _IH_TransactionDetail_C|TransactionDetail[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method TransactionDetail|_IH_TransactionDetail_C|TransactionDetail[] findOrFail($id, array $columns = ['*'])
     * @method TransactionDetail|_IH_TransactionDetail_C|TransactionDetail[] findOrNew($id, array $columns = ['*'])
     * @method TransactionDetail first(array|string $columns = ['*'])
     * @method TransactionDetail firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method TransactionDetail firstOrCreate(array $attributes = [], array $values = [])
     * @method TransactionDetail firstOrFail(array $columns = ['*'])
     * @method TransactionDetail firstOrNew(array $attributes = [], array $values = [])
     * @method TransactionDetail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TransactionDetail forceCreate(array $attributes)
     * @method _IH_TransactionDetail_C|TransactionDetail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TransactionDetail_C|TransactionDetail[] get(array|string $columns = ['*'])
     * @method TransactionDetail getModel()
     * @method TransactionDetail[] getModels(array|string $columns = ['*'])
     * @method _IH_TransactionDetail_C|TransactionDetail[] hydrate(array $items)
     * @method TransactionDetail make(array $attributes = [])
     * @method TransactionDetail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TransactionDetail[]|_IH_TransactionDetail_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TransactionDetail[]|_IH_TransactionDetail_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TransactionDetail sole(array|string $columns = ['*'])
     * @method TransactionDetail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TransactionDetail_QB extends _BaseBuilder {}
    
    /**
     * @method Transaction|null getOrPut($key, $value)
     * @method Transaction|$this shift(int $count = 1)
     * @method Transaction|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Transaction|$this pop(int $count = 1)
     * @method Transaction|null pull($key, $default = null)
     * @method Transaction|null last(callable $callback = null, $default = null)
     * @method Transaction|$this random(int|null $number = null)
     * @method Transaction|null sole($key = null, $operator = null, $value = null)
     * @method Transaction|null get($key, $default = null)
     * @method Transaction|null first(callable $callback = null, $default = null)
     * @method Transaction|null firstWhere(string $key, $operator = null, $value = null)
     * @method Transaction|null find($key, $default = null)
     * @method Transaction[] all()
     */
    class _IH_Transaction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Transaction[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Transaction_QB whereId($value)
     * @method _IH_Transaction_QB whereUserId($value)
     * @method _IH_Transaction_QB wherePaymentMethodId($value)
     * @method _IH_Transaction_QB whereAddressId($value)
     * @method _IH_Transaction_QB whereQuantity($value)
     * @method _IH_Transaction_QB wherePromoCode($value)
     * @method _IH_Transaction_QB whereAmount($value)
     * @method _IH_Transaction_QB whereDiscount($value)
     * @method _IH_Transaction_QB whereShippingCost($value)
     * @method _IH_Transaction_QB whereTax($value)
     * @method _IH_Transaction_QB whereTotal($value)
     * @method _IH_Transaction_QB whereCreatedAt($value)
     * @method _IH_Transaction_QB whereUpdatedAt($value)
     * @method Transaction baseSole(array|string $columns = ['*'])
     * @method Transaction create(array $attributes = [])
     * @method _IH_Transaction_C|Transaction[] cursor()
     * @method Transaction|null|_IH_Transaction_C|Transaction[] find($id, array $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrFail($id, array $columns = ['*'])
     * @method Transaction|_IH_Transaction_C|Transaction[] findOrNew($id, array $columns = ['*'])
     * @method Transaction first(array|string $columns = ['*'])
     * @method Transaction firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method Transaction firstOrCreate(array $attributes = [], array $values = [])
     * @method Transaction firstOrFail(array $columns = ['*'])
     * @method Transaction firstOrNew(array $attributes = [], array $values = [])
     * @method Transaction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Transaction forceCreate(array $attributes)
     * @method _IH_Transaction_C|Transaction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Transaction_C|Transaction[] get(array|string $columns = ['*'])
     * @method Transaction getModel()
     * @method Transaction[] getModels(array|string $columns = ['*'])
     * @method _IH_Transaction_C|Transaction[] hydrate(array $items)
     * @method Transaction make(array $attributes = [])
     * @method Transaction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Transaction[]|_IH_Transaction_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Transaction[]|_IH_Transaction_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Transaction sole(array|string $columns = ['*'])
     * @method Transaction updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Transaction_QB extends _BaseBuilder {}
    
    /**
     * @method UserAddress|null getOrPut($key, $value)
     * @method UserAddress|$this shift(int $count = 1)
     * @method UserAddress|null firstOrFail($key = null, $operator = null, $value = null)
     * @method UserAddress|$this pop(int $count = 1)
     * @method UserAddress|null pull($key, $default = null)
     * @method UserAddress|null last(callable $callback = null, $default = null)
     * @method UserAddress|$this random(int|null $number = null)
     * @method UserAddress|null sole($key = null, $operator = null, $value = null)
     * @method UserAddress|null get($key, $default = null)
     * @method UserAddress|null first(callable $callback = null, $default = null)
     * @method UserAddress|null firstWhere(string $key, $operator = null, $value = null)
     * @method UserAddress|null find($key, $default = null)
     * @method UserAddress[] all()
     */
    class _IH_UserAddress_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserAddress[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserAddress_QB whereId($value)
     * @method _IH_UserAddress_QB whereUserId($value)
     * @method _IH_UserAddress_QB whereTitle($value)
     * @method _IH_UserAddress_QB whereSubtitle($value)
     * @method _IH_UserAddress_QB whereName($value)
     * @method _IH_UserAddress_QB wherePhoneNumber($value)
     * @method _IH_UserAddress_QB whereDetail($value)
     * @method _IH_UserAddress_QB whereLongitude($value)
     * @method _IH_UserAddress_QB whereLatitude($value)
     * @method _IH_UserAddress_QB whereStatus($value)
     * @method _IH_UserAddress_QB whereCreatedAt($value)
     * @method _IH_UserAddress_QB whereUpdatedAt($value)
     * @method UserAddress baseSole(array|string $columns = ['*'])
     * @method UserAddress create(array $attributes = [])
     * @method _IH_UserAddress_C|UserAddress[] cursor()
     * @method UserAddress|null|_IH_UserAddress_C|UserAddress[] find($id, array $columns = ['*'])
     * @method _IH_UserAddress_C|UserAddress[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UserAddress|_IH_UserAddress_C|UserAddress[] findOrFail($id, array $columns = ['*'])
     * @method UserAddress|_IH_UserAddress_C|UserAddress[] findOrNew($id, array $columns = ['*'])
     * @method UserAddress first(array|string $columns = ['*'])
     * @method UserAddress firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method UserAddress firstOrCreate(array $attributes = [], array $values = [])
     * @method UserAddress firstOrFail(array $columns = ['*'])
     * @method UserAddress firstOrNew(array $attributes = [], array $values = [])
     * @method UserAddress firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserAddress forceCreate(array $attributes)
     * @method _IH_UserAddress_C|UserAddress[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserAddress_C|UserAddress[] get(array|string $columns = ['*'])
     * @method UserAddress getModel()
     * @method UserAddress[] getModels(array|string $columns = ['*'])
     * @method _IH_UserAddress_C|UserAddress[] hydrate(array $items)
     * @method UserAddress make(array $attributes = [])
     * @method UserAddress newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserAddress[]|_IH_UserAddress_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserAddress[]|_IH_UserAddress_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserAddress sole(array|string $columns = ['*'])
     * @method UserAddress updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserAddress_QB extends _BaseBuilder {}
    
    /**
     * @method UserPaymentMethod|null getOrPut($key, $value)
     * @method UserPaymentMethod|$this shift(int $count = 1)
     * @method UserPaymentMethod|null firstOrFail($key = null, $operator = null, $value = null)
     * @method UserPaymentMethod|$this pop(int $count = 1)
     * @method UserPaymentMethod|null pull($key, $default = null)
     * @method UserPaymentMethod|null last(callable $callback = null, $default = null)
     * @method UserPaymentMethod|$this random(int|null $number = null)
     * @method UserPaymentMethod|null sole($key = null, $operator = null, $value = null)
     * @method UserPaymentMethod|null get($key, $default = null)
     * @method UserPaymentMethod|null first(callable $callback = null, $default = null)
     * @method UserPaymentMethod|null firstWhere(string $key, $operator = null, $value = null)
     * @method UserPaymentMethod|null find($key, $default = null)
     * @method UserPaymentMethod[] all()
     */
    class _IH_UserPaymentMethod_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserPaymentMethod[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserPaymentMethod_QB whereId($value)
     * @method _IH_UserPaymentMethod_QB whereUserId($value)
     * @method _IH_UserPaymentMethod_QB wherePaymentMethodId($value)
     * @method _IH_UserPaymentMethod_QB whereCreatedAt($value)
     * @method _IH_UserPaymentMethod_QB whereUpdatedAt($value)
     * @method UserPaymentMethod baseSole(array|string $columns = ['*'])
     * @method UserPaymentMethod create(array $attributes = [])
     * @method _IH_UserPaymentMethod_C|UserPaymentMethod[] cursor()
     * @method UserPaymentMethod|null|_IH_UserPaymentMethod_C|UserPaymentMethod[] find($id, array $columns = ['*'])
     * @method _IH_UserPaymentMethod_C|UserPaymentMethod[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UserPaymentMethod|_IH_UserPaymentMethod_C|UserPaymentMethod[] findOrFail($id, array $columns = ['*'])
     * @method UserPaymentMethod|_IH_UserPaymentMethod_C|UserPaymentMethod[] findOrNew($id, array $columns = ['*'])
     * @method UserPaymentMethod first(array|string $columns = ['*'])
     * @method UserPaymentMethod firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method UserPaymentMethod firstOrCreate(array $attributes = [], array $values = [])
     * @method UserPaymentMethod firstOrFail(array $columns = ['*'])
     * @method UserPaymentMethod firstOrNew(array $attributes = [], array $values = [])
     * @method UserPaymentMethod firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserPaymentMethod forceCreate(array $attributes)
     * @method _IH_UserPaymentMethod_C|UserPaymentMethod[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserPaymentMethod_C|UserPaymentMethod[] get(array|string $columns = ['*'])
     * @method UserPaymentMethod getModel()
     * @method UserPaymentMethod[] getModels(array|string $columns = ['*'])
     * @method _IH_UserPaymentMethod_C|UserPaymentMethod[] hydrate(array $items)
     * @method UserPaymentMethod make(array $attributes = [])
     * @method UserPaymentMethod newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserPaymentMethod[]|_IH_UserPaymentMethod_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserPaymentMethod[]|_IH_UserPaymentMethod_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserPaymentMethod sole(array|string $columns = ['*'])
     * @method UserPaymentMethod updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserPaymentMethod_QB extends _BaseBuilder {}
    
    /**
     * @method UserWishlist|null getOrPut($key, $value)
     * @method UserWishlist|$this shift(int $count = 1)
     * @method UserWishlist|null firstOrFail($key = null, $operator = null, $value = null)
     * @method UserWishlist|$this pop(int $count = 1)
     * @method UserWishlist|null pull($key, $default = null)
     * @method UserWishlist|null last(callable $callback = null, $default = null)
     * @method UserWishlist|$this random(int|null $number = null)
     * @method UserWishlist|null sole($key = null, $operator = null, $value = null)
     * @method UserWishlist|null get($key, $default = null)
     * @method UserWishlist|null first(callable $callback = null, $default = null)
     * @method UserWishlist|null firstWhere(string $key, $operator = null, $value = null)
     * @method UserWishlist|null find($key, $default = null)
     * @method UserWishlist[] all()
     */
    class _IH_UserWishlist_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserWishlist[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserWishlist_QB whereId($value)
     * @method _IH_UserWishlist_QB whereUserId($value)
     * @method _IH_UserWishlist_QB whereProductId($value)
     * @method _IH_UserWishlist_QB whereCreatedAt($value)
     * @method _IH_UserWishlist_QB whereUpdatedAt($value)
     * @method UserWishlist baseSole(array|string $columns = ['*'])
     * @method UserWishlist create(array $attributes = [])
     * @method _IH_UserWishlist_C|UserWishlist[] cursor()
     * @method UserWishlist|null|_IH_UserWishlist_C|UserWishlist[] find($id, array $columns = ['*'])
     * @method _IH_UserWishlist_C|UserWishlist[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method UserWishlist|_IH_UserWishlist_C|UserWishlist[] findOrFail($id, array $columns = ['*'])
     * @method UserWishlist|_IH_UserWishlist_C|UserWishlist[] findOrNew($id, array $columns = ['*'])
     * @method UserWishlist first(array|string $columns = ['*'])
     * @method UserWishlist firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method UserWishlist firstOrCreate(array $attributes = [], array $values = [])
     * @method UserWishlist firstOrFail(array $columns = ['*'])
     * @method UserWishlist firstOrNew(array $attributes = [], array $values = [])
     * @method UserWishlist firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserWishlist forceCreate(array $attributes)
     * @method _IH_UserWishlist_C|UserWishlist[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserWishlist_C|UserWishlist[] get(array|string $columns = ['*'])
     * @method UserWishlist getModel()
     * @method UserWishlist[] getModels(array|string $columns = ['*'])
     * @method _IH_UserWishlist_C|UserWishlist[] hydrate(array $items)
     * @method UserWishlist make(array $attributes = [])
     * @method UserWishlist newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserWishlist[]|_IH_UserWishlist_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserWishlist[]|_IH_UserWishlist_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserWishlist sole(array|string $columns = ['*'])
     * @method UserWishlist updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserWishlist_QB extends _BaseBuilder {}
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random(int|null $number = null)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB wherePhoto($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrFail($id, array $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}