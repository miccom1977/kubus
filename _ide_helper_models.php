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
 * App\Models\Competition
 *
 * @property int $id
 * @property string $description
 * @property string $sex
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Competition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereUpdatedAt($value)
 */
	class Competition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\School
 *
 * @property int $id
 * @property string $description
 * @property int $year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SchoolClass[] $classes
 * @property-read int|null $classes_count
 * @method static \Illuminate\Database\Eloquent\Builder|School newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|School query()
 * @method static \Illuminate\Database\Eloquent\Builder|School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|School whereYear($value)
 */
	class School extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SchoolClass
 *
 * @property int $id
 * @property string $description
 * @property string $day
 * @property string $hour
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $school_id
 * @property-read \App\Models\School $school
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Swimmer[] $swimmer
 * @property-read int|null $swimmer_count
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereHour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolClass whereUpdatedAt($value)
 */
	class SchoolClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Swimmer
 *
 * @property int $id
 * @property string $first_name
 * @property string $second_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $school_class_id
 * @property int $sex
 * @property int $status
 * @property-read \App\Models\School|null $school
 * @property-read \App\Models\SchoolClass $schoolClass
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereSchoolClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereSecondName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Swimmer whereUpdatedAt($value)
 */
	class Swimmer extends \Eloquent {}
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
 * @property string $role_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

