<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\FailedJob
 *
 * @property int $id
 * @property string $uuid
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property string $failed_at
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob query()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereQueue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedJob whereUuid($value)
 */
	class FailedJob extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FamilyRelation
 *
 * @property int $parent_id
 * @property int|null $child_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyRelation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyRelation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyRelation query()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyRelation whereChildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyRelation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyRelation whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilyRelation whereUpdatedAt($value)
 */
	class FamilyRelation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PersonalAccessToken
 *
 * @property int $id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property string|null $abilities
 * @property string|null $last_used_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereAbilities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereLastUsedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereTokenableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereTokenableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalAccessToken whereUpdatedAt($value)
 */
	class PersonalAccessToken extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserInformationDetail[] $userInformationDetails
 * @property-read int|null $user_information_details_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserInformation
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation query()
 */
	class UserInformation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserInformationDetail
 *
 * @property int $id
 * @property string $value
 * @property int|null $information_type_id
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserInformationDetailFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail whereInformationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformationDetail whereValue($value)
 */
	class UserInformationDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\informationType
 *
 * @property int $id
 * @property string $name
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserInformationDetail[] $userInformationDetails
 * @property-read int|null $user_information_details_count
 * @method static \Database\Factories\informationTypeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|informationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|informationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|informationType query()
 * @method static \Illuminate\Database\Eloquent\Builder|informationType whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|informationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|informationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|informationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|informationType whereUpdatedAt($value)
 */
	class informationType extends \Eloquent {}
}

