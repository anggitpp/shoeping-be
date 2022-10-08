<?php //3760d0a7d23ce88427d1a73a7fc15705
/** @noinspection all */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Brand_C;
    use LaravelIdea\Helper\App\Models\_IH_Brand_QB;
    use LaravelIdea\Helper\App\Models\_IH_PaymentMethod_C;
    use LaravelIdea\Helper\App\Models\_IH_PaymentMethod_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductImage_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductImage_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductStock_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductStock_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_Promo_C;
    use LaravelIdea\Helper\App\Models\_IH_Promo_QB;
    use LaravelIdea\Helper\App\Models\_IH_TransactionDetail_C;
    use LaravelIdea\Helper\App\Models\_IH_TransactionDetail_QB;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_C;
    use LaravelIdea\Helper\App\Models\_IH_Transaction_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserAddress_C;
    use LaravelIdea\Helper\App\Models\_IH_UserAddress_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserPaymentMethod_C;
    use LaravelIdea\Helper\App\Models\_IH_UserPaymentMethod_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserWishlist_C;
    use LaravelIdea\Helper\App\Models\_IH_UserWishlist_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property string $name
     * @property string|null $image
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Brand_QB onWriteConnection()
     * @method _IH_Brand_QB newQuery()
     * @method static _IH_Brand_QB on(null|string $connection = null)
     * @method static _IH_Brand_QB query()
     * @method static _IH_Brand_QB with(array|string $relations)
     * @method _IH_Brand_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Brand_C|Brand[] all()
     * @foreignLinks id,\App\Models\Product,brand_id|id,\App\Models\TransactionDetail,brand_id
     * @mixin _IH_Brand_QB
     */
    class Brand extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string|null $image
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_PaymentMethod_QB onWriteConnection()
     * @method _IH_PaymentMethod_QB newQuery()
     * @method static _IH_PaymentMethod_QB on(null|string $connection = null)
     * @method static _IH_PaymentMethod_QB query()
     * @method static _IH_PaymentMethod_QB with(array|string $relations)
     * @method _IH_PaymentMethod_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaymentMethod_C|PaymentMethod[] all()
     * @foreignLinks id,\App\Models\UserPaymentMethod,payment_method_id|id,\App\Models\Transaction,payment_method_id
     * @mixin _IH_PaymentMethod_QB
     */
    class PaymentMethod extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property int $brand_id
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property float $price
     * @property Brand $brand
     * @method BelongsTo|_IH_Brand_QB brand()
     * @property _IH_ProductImage_C|ProductImage[] $images
     * @property-read int $images_count
     * @method HasMany|_IH_ProductImage_QB images()
     * @property _IH_ProductStock_C|ProductStock[] $stocks
     * @property-read int $stocks_count
     * @method HasMany|_IH_ProductStock_QB stocks()
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks brand_id,\App\Models\Brand,id
     * @foreignLinks id,\App\Models\ProductImage,product_id|id,\App\Models\ProductStock,product_id|id,\App\Models\UserWishlist,product_id|id,\App\Models\TransactionDetail,product_id
     * @mixin _IH_Product_QB
     */
    class Product extends Model {}
    
    /**
     * @property int $id
     * @property int $product_id
     * @property string $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ProductImage_QB onWriteConnection()
     * @method _IH_ProductImage_QB newQuery()
     * @method static _IH_ProductImage_QB on(null|string $connection = null)
     * @method static _IH_ProductImage_QB query()
     * @method static _IH_ProductImage_QB with(array|string $relations)
     * @method _IH_ProductImage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductImage_C|ProductImage[] all()
     * @ownLinks product_id,\App\Models\Product,id
     * @mixin _IH_ProductImage_QB
     */
    class ProductImage extends Model {}
    
    /**
     * @property int $id
     * @property int $product_id
     * @property string $size
     * @property int $stock
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ProductStock_QB onWriteConnection()
     * @method _IH_ProductStock_QB newQuery()
     * @method static _IH_ProductStock_QB on(null|string $connection = null)
     * @method static _IH_ProductStock_QB query()
     * @method static _IH_ProductStock_QB with(array|string $relations)
     * @method _IH_ProductStock_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductStock_C|ProductStock[] all()
     * @ownLinks product_id,\App\Models\Product,id
     * @mixin _IH_ProductStock_QB
     */
    class ProductStock extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $description
     * @property string $image
     * @property string $type
     * @property int $value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Promo_QB onWriteConnection()
     * @method _IH_Promo_QB newQuery()
     * @method static _IH_Promo_QB on(null|string $connection = null)
     * @method static _IH_Promo_QB query()
     * @method static _IH_Promo_QB with(array|string $relations)
     * @method _IH_Promo_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Promo_C|Promo[] all()
     * @mixin _IH_Promo_QB
     */
    class Promo extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $payment_method_id
     * @property int $address_id
     * @property int|null $quantity
     * @property string|null $promo_code
     * @property float|null $amount
     * @property float|null $discount
     * @property float|null $shipping_cost
     * @property float|null $tax
     * @property float|null $total
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property UserAddress $address
     * @method BelongsTo|_IH_UserAddress_QB address()
     * @property _IH_TransactionDetail_C|TransactionDetail[] $details
     * @property-read int $details_count
     * @method HasMany|_IH_TransactionDetail_QB details()
     * @property PaymentMethod $paymentMethod
     * @method BelongsTo|_IH_PaymentMethod_QB paymentMethod()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Transaction_QB onWriteConnection()
     * @method _IH_Transaction_QB newQuery()
     * @method static _IH_Transaction_QB on(null|string $connection = null)
     * @method static _IH_Transaction_QB query()
     * @method static _IH_Transaction_QB with(array|string $relations)
     * @method _IH_Transaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Transaction_C|Transaction[] all()
     * @ownLinks user_id,\App\Models\User,id|payment_method_id,\App\Models\PaymentMethod,id
     * @foreignLinks id,\App\Models\TransactionDetail,transaction_id
     * @mixin _IH_Transaction_QB
     */
    class Transaction extends Model {}
    
    /**
     * @property int $id
     * @property int $transaction_id
     * @property int $brand_id
     * @property int $product_id
     * @property int $stock_id
     * @property int $quantity
     * @property float $amount
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Brand $brand
     * @method BelongsTo|_IH_Brand_QB brand()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property ProductStock $stock
     * @method BelongsTo|_IH_ProductStock_QB stock()
     * @method static _IH_TransactionDetail_QB onWriteConnection()
     * @method _IH_TransactionDetail_QB newQuery()
     * @method static _IH_TransactionDetail_QB on(null|string $connection = null)
     * @method static _IH_TransactionDetail_QB query()
     * @method static _IH_TransactionDetail_QB with(array|string $relations)
     * @method _IH_TransactionDetail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TransactionDetail_C|TransactionDetail[] all()
     * @ownLinks transaction_id,\App\Models\Transaction,id|brand_id,\App\Models\Brand,id|product_id,\App\Models\Product,id
     * @mixin _IH_TransactionDetail_QB
     */
    class TransactionDetail extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $photo
     * @property _IH_UserAddress_C|UserAddress[] $addresses
     * @property-read int $addresses_count
     * @method HasMany|_IH_UserAddress_QB addresses()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_UserPaymentMethod_C|UserPaymentMethod[] $paymentMethods
     * @property-read int $payment_methods_count
     * @method HasMany|_IH_UserPaymentMethod_QB paymentMethods()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @property _IH_UserWishlist_C|UserWishlist[] $wishlists
     * @property-read int $wishlists_count
     * @method HasMany|_IH_UserWishlist_QB wishlists()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\App\Models\UserWishlist,user_id|id,\App\Models\UserAddress,user_id|id,\App\Models\UserPaymentMethod,user_id|id,\App\Models\Transaction,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(...$parameters)
     */
    class User extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $title
     * @property string|null $subtitle
     * @property string $name
     * @property string $phone_number
     * @property string $detail
     * @property string $longitude
     * @property string $latitude
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $address
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_UserAddress_QB onWriteConnection()
     * @method _IH_UserAddress_QB newQuery()
     * @method static _IH_UserAddress_QB on(null|string $connection = null)
     * @method static _IH_UserAddress_QB query()
     * @method static _IH_UserAddress_QB with(array|string $relations)
     * @method _IH_UserAddress_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserAddress_C|UserAddress[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_UserAddress_QB
     */
    class UserAddress extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $payment_method_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_UserPaymentMethod_QB onWriteConnection()
     * @method _IH_UserPaymentMethod_QB newQuery()
     * @method static _IH_UserPaymentMethod_QB on(null|string $connection = null)
     * @method static _IH_UserPaymentMethod_QB query()
     * @method static _IH_UserPaymentMethod_QB with(array|string $relations)
     * @method _IH_UserPaymentMethod_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserPaymentMethod_C|UserPaymentMethod[] all()
     * @ownLinks user_id,\App\Models\User,id|payment_method_id,\App\Models\PaymentMethod,id
     * @mixin _IH_UserPaymentMethod_QB
     */
    class UserPaymentMethod extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $product_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_UserWishlist_QB onWriteConnection()
     * @method _IH_UserWishlist_QB newQuery()
     * @method static _IH_UserWishlist_QB on(null|string $connection = null)
     * @method static _IH_UserWishlist_QB query()
     * @method static _IH_UserWishlist_QB with(array|string $relations)
     * @method _IH_UserWishlist_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserWishlist_C|UserWishlist[] all()
     * @ownLinks user_id,\App\Models\User,id|product_id,\App\Models\Product,id
     * @mixin _IH_UserWishlist_QB
     */
    class UserWishlist extends Model {}
}