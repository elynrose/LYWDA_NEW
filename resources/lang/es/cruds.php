<?php

return [
    'userManagement' => [
        'title'          => 'Gestionar usuarios',
        'title_singular' => 'Gestionar usuarios',
    ],
    'permission' => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => ' ',
            'email'                        => 'Email',
            'email_helper'                 => ' ',
            'email_verified_at'            => 'Email verified at',
            'email_verified_at_helper'     => ' ',
            'password'                     => 'Password',
            'password_helper'              => ' ',
            'roles'                        => 'Roles',
            'roles_helper'                 => ' ',
            'remember_token'               => 'Remember Token',
            'remember_token_helper'        => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'street'                       => 'Street',
            'street_helper'                => ' ',
            'state'                        => 'State',
            'state_helper'                 => ' ',
            'city'                         => 'City',
            'city_helper'                  => ' ',
            'zip_code'                     => 'Zip Code',
            'zip_code_helper'              => ' ',
            'paid'                         => 'Paid',
            'paid_helper'                  => ' ',
            'country'                      => 'Country',
            'country_helper'               => ' ',
            'verified'                     => 'Verified',
            'verified_helper'              => ' ',
            'verified_at'                  => 'Verified at',
            'verified_at_helper'           => ' ',
            'verification_token'           => 'Verification token',
            'verification_token_helper'    => ' ',
            'two_factor'                   => 'Two-Factor Auth',
            'two_factor_helper'            => ' ',
            'two_factor_code'              => 'Two-factor code',
            'two_factor_code_helper'       => ' ',
            'two_factor_expires_at'        => 'Two-factor expires at',
            'two_factor_expires_at_helper' => ' ',
        ],
    ],
    'country' => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'short_code'        => 'Short Code',
            'short_code_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'faqManagement' => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'course' => [
        'title'          => 'Courses',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'teacher'             => 'Teacher',
            'teacher_helper'      => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'price'               => 'Price',
            'price_helper'        => ' ',
            'thumbnail'           => 'Thumbnail',
            'thumbnail_helper'    => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'students'            => 'Students',
            'students_helper'     => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'lesson' => [
        'title'          => 'Lessons',
        'title_singular' => 'Lesson',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Course',
            'course_helper'       => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'thumbnail'           => 'Thumbnail',
            'thumbnail_helper'    => ' ',
            'short_text'          => 'Short Text',
            'short_text_helper'   => ' ',
            'long_text'           => 'Long Text',
            'long_text_helper'    => ' ',
            'video'               => 'Video',
            'video_helper'        => ' ',
            'position'            => 'Position',
            'position_helper'     => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'is_free'             => 'Is Free',
            'is_free_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'test' => [
        'title'          => 'Tests',
        'title_singular' => 'Test',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Course',
            'course_helper'       => ' ',
            'lesson'              => 'Lesson',
            'lesson_helper'       => ' ',
            'title'               => 'Title',
            'title_helper'        => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'is_published'        => 'Is Published',
            'is_published_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'question' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'test'                  => 'Test',
            'test_helper'           => ' ',
            'question_text'         => 'Question Text',
            'question_text_helper'  => ' ',
            'question_image'        => 'Question Image',
            'question_image_helper' => ' ',
            'points'                => 'Points',
            'points_helper'         => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'questionOption' => [
        'title'          => 'Question Options',
        'title_singular' => 'Question Option',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'option_text'        => 'Option text',
            'option_text_helper' => ' ',
            'is_correct'         => 'Is Correct',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'testResult' => [
        'title'          => 'Test Results',
        'title_singular' => 'Test Result',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'test'              => 'Test',
            'test_helper'       => ' ',
            'student'           => 'Student',
            'student_helper'    => ' ',
            'score'             => 'Score',
            'score_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'testAnswer' => [
        'title'          => 'Test Answers',
        'title_singular' => 'Test Answer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'test_result'        => 'Test Result',
            'test_result_helper' => ' ',
            'question'           => 'Question',
            'question_helper'    => ' ',
            'option'             => 'Option',
            'option_helper'      => ' ',
            'is_correct'         => 'Is Correect',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],

];
