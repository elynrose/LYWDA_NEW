<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'country_create',
            ],
            [
                'id'    => 18,
                'title' => 'country_edit',
            ],
            [
                'id'    => 19,
                'title' => 'country_show',
            ],
            [
                'id'    => 20,
                'title' => 'country_delete',
            ],
            [
                'id'    => 21,
                'title' => 'country_access',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 23,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 25,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 26,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 27,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 28,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 29,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 30,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 31,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 32,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 33,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 34,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 35,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 36,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 37,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 38,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 39,
                'title' => 'course_create',
            ],
            [
                'id'    => 40,
                'title' => 'course_edit',
            ],
            [
                'id'    => 41,
                'title' => 'course_show',
            ],
            [
                'id'    => 42,
                'title' => 'course_delete',
            ],
            [
                'id'    => 43,
                'title' => 'course_access',
            ],
            [
                'id'    => 44,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 45,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 46,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 47,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 48,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 49,
                'title' => 'test_create',
            ],
            [
                'id'    => 50,
                'title' => 'test_edit',
            ],
            [
                'id'    => 51,
                'title' => 'test_show',
            ],
            [
                'id'    => 52,
                'title' => 'test_delete',
            ],
            [
                'id'    => 53,
                'title' => 'test_access',
            ],
            [
                'id'    => 54,
                'title' => 'question_create',
            ],
            [
                'id'    => 55,
                'title' => 'question_edit',
            ],
            [
                'id'    => 56,
                'title' => 'question_show',
            ],
            [
                'id'    => 57,
                'title' => 'question_delete',
            ],
            [
                'id'    => 58,
                'title' => 'question_access',
            ],
            [
                'id'    => 59,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 60,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 61,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 62,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 63,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 64,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 65,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 66,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 67,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 68,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 69,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 70,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 71,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 72,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 73,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 74,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
