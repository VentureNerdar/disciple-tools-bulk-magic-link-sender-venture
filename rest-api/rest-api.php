<?php
if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly.

class Disciple_Tools_Bulk_Magic_Link_Sender_Endpoints {
    /**
     * @todo Set the permissions your endpoint needs
     * @link https://github.com/DiscipleTools/Documentation/blob/master/theme-core/capabilities.md
     * @var string[]
     */
    public $permissions = ['manage_dt'];


    /**
     * @todo define the name of the $namespace
     * @todo define the name of the rest route
     * @todo defne method (CREATABLE, READABLE)
     * @todo apply permission strategy. '__return_true' essentially skips the permission check.
     */
    //See https://github.com/DiscipleTools/disciple-tools-theme/wiki/Site-to-Site-Link for outside of wordpress authentication
    public function add_api_routes() {
        $namespace = 'disciple_tools_magic_links/v1';

        register_rest_route(
            $namespace,
            '/setup_payload',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'setup_payload'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/get_post_record',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'get_post_record'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/user_links_manage',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'user_links_manage'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/assigned_manage',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'assigned_manage'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/send_now',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'send_now'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/next_scheduled_run',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'next_scheduled_run'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/report',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'get_report'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/references',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'references'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
        register_rest_route(
            $namespace,
            '/typeahead_users_teams_groups',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'typeahead_users_teams_groups'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/exists_magic_link_fields_sort_order',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'exists_magic_link_fields_sort_order'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/get_magic_link_fields_sort_order',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'get_magic_link_fields_sort_order'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/add_magic_link_fields_sort_order',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'add_magic_link_fields_sort_order'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/update_magic_link_fields_sort_order',
            [
                'methods'             => WP_REST_Server::EDITABLE,
                'callback'            => [$this, 'update_magic_link_fields_sort_order'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/add_magic_link_custom_branding',
            [
                'methods'          => WP_REST_Server::CREATABLE,
                'callback'         => [$this, 'add_magic_link_custom_branding'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/update_magic_link_custom_branding',
            [
                'methods'             => WP_REST_Server::EDITABLE,
                'callback'            => [$this, 'update_magic_link_custom_branding'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/handle_upload_custom_branding_icon',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'handle_upload_custom_branding_icon'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/delete_custom_branding_icon',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'delete_custom_branding_icon'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/get_custom_branding_icon',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'get_custom_branding_icon'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/save_custom_branding_display_options',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'save_custom_branding_display_options'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/get_custom_branding_display_options',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'get_custom_branding_display_options'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/get_custom_branding_enable',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'get_custom_branding_enable'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/save_custom_branding_enable',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'save_custom_branding_enable'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/get_custom_branding_name',
            [
                'methods'             => WP_REST_Server::READABLE,
                'callback'            => [$this, 'get_custom_branding_name'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );

        register_rest_route(
            $namespace,
            '/save_custom_branding_name',
            [
                'methods'             => WP_REST_Server::CREATABLE,
                'callback'            => [$this, 'save_custom_branding_name'],
                'permission_callback' => function (WP_REST_Request $request) {
                    return $this->has_permission();
                }
            ]
        );
    }

    public function setup_payload(WP_REST_Request $request): array {
        $params = $request->get_params();
        $response = [];
        if (isset($params['dt_magic_link_types']) && filter_var($params['dt_magic_link_types'], FILTER_VALIDATE_BOOLEAN)) {
            $response['dt_magic_link_types'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_magic_link_types();
        }
        if (isset($params['dt_magic_link_templates']) && filter_var($params['dt_magic_link_templates'], FILTER_VALIDATE_BOOLEAN)) {
            $response['dt_magic_link_templates'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_option(Disciple_Tools_Bulk_Magic_Link_Sender_API::$option_dt_magic_links_templates);
        }
        if (isset($params['dt_magic_link_objects']) && filter_var($params['dt_magic_link_objects'], FILTER_VALIDATE_BOOLEAN)) {
            $response['dt_magic_link_objects'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_option_link_objs();
        }
        if (isset($params['dt_sending_channels']) && filter_var($params['dt_sending_channels'], FILTER_VALIDATE_BOOLEAN)) {
            $response['dt_sending_channels'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_sending_channels();
        }

        return $response;
    }

    public function get_post_record(WP_REST_Request $request): array {

        // Prepare response payload
        $response = [];

        $params = $request->get_params();
        if (isset($params['post_type'], $params['post_id'])) {

            // Ensure user, team & group requests, are handled accordingly.
            if (in_array($params['post_type'], ['dt_users', 'dt_teams', 'dt_groups'])) {
                switch ($params['post_type']) {
                    case 'dt_users':
                        $response['post'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_dt_users(true, [
                            'type' => 'id',
                            'query' => $params['post_id']
                        ]);
                        break;
                    case 'dt_teams':
                        $response['post'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_dt_teams(true, [
                            'type' => 'id',
                            'query' => $params['post_id']
                        ]);
                        break;
                    case 'dt_groups':
                        $response['post'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_dt_groups(true, [
                            'type' => 'id',
                            'query' => $params['post_id']
                        ]);
                        break;
                }

                $response['success'] = true;
                $response['message'] = 'Successfully loaded ' . $params['post_type'] . ' post record for id: ' . $params['post_id'];
            } else {
                $post = DT_Posts::get_post($params['post_type'], $params['post_id'], true, false, true);
                if (!empty($post) && !is_wp_error($post)) {

                    // Also, check for any associated magic links
                    $post['ml_links'] = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_post_magic_links($post['ID']);

                    // Update response payload
                    $response['post']    = $post;
                    $response['success'] = true;
                    $response['message'] = 'Successfully loaded ' . $params['post_type'] . ' post record for id: ' . $params['post_id'];
                } else {
                    $response['success'] = false;
                    $response['message'] = 'Unable to locate a valid ' . $params['post_type'] . ' post record for id: ' . $params['post_id'];
                }
            }
        } else {
            $response['success'] = false;
            $response['message'] = 'Unable to execute request, due to missing parameters.';
        }

        return $response;
    }

    public function user_links_manage(WP_REST_Request $request): array {

        // Prepare response payload
        $response = [];

        $params = $request->get_params();
        if (isset($params['action'], $params['assigned'], $params['link_obj_id'], $params['magic_link_type'])) {

            // Adjust assigned array shape, to ensure it is processed accordingly further downstream
            $assigned = json_decode(json_encode($params['assigned']));

            // Attempt to load link object based on submitted id
            $link_obj = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_option_link_obj($params['link_obj_id']);

            // Execute accordingly, based on specified action
            switch ($params['action']) {
                case 'refresh':
                    Disciple_Tools_Bulk_Magic_Link_Sender_API::update_magic_links($link_obj, $assigned, false);

                    // Also update base timestamp and future expiration points
                    if (isset($params['links_expire_within_amount'], $params['links_expire_within_time_unit'], $params['links_never_expires'])) {

                        $base_ts       = time();
                        $amt           = $params['links_expire_within_amount'];
                        $time_unit     = $params['links_expire_within_time_unit'];
                        $never_expires = in_array(strtolower($params['links_never_expires']), ['true']);

                        // Iterate over all assigned and update their respective expiration timestamps
                        foreach ($assigned ?? [] as &$member) {
                            $member = Disciple_Tools_Bulk_Magic_Link_Sender_API::refresh_user_links_expiration_values($member, $base_ts, $amt, $time_unit, $never_expires);
                        }
                    }
                    break;

                case 'delete':
                    Disciple_Tools_Bulk_Magic_Link_Sender_API::update_magic_links($link_obj, $assigned, true);

                    // Iterate over all assigned and reset their respective expiration timestamps
                    foreach ($assigned ?? [] as &$member) {
                        $member->links_expire_within_base_ts  = '';
                        $member->links_expire_on_ts           = '';
                        $member->links_expire_on_ts_formatted = '';
                    }
                    break;
            }

            // Save updated link object
            $link_obj->assigned = $assigned;
            Disciple_Tools_Bulk_Magic_Link_Sender_API::update_option_link_obj($link_obj);

            // Ensure current user has sufficient capabilities/roles for the tasks ahead!
            $current_user = wp_get_current_user();
            if (!empty($current_user) && !is_wp_error($current_user) && !current_user_can('access_contacts')) {
                $current_user->add_role('access_contacts');
            }

            // Return original assigned array + updated users, teams & groups
            $response['success']   = true;
            $response['message']   = 'User links management action[' . $params['action'] . '] successfully executed.';
            $response['assigned']  = $assigned;
        } else {
            $response['success'] = false;
            $response['message'] = 'Unable to execute action, due to missing parameters.';
        }

        return $response;
    }

    public function assigned_manage(WP_REST_Request $request): array {

        // Prepare response payload
        $response = [];

        $params = $request->get_params();
        if (isset($params['action'], $params['record'], $params['link_obj_id'], $params['magic_link_type'])) {

            // Adjust assigned array shape, to ensure it is processed accordingly further downstream
            $record = json_decode(json_encode($params['record']));

            // Execute accordingly, based on specified action
            switch ($params['action']) {
                case 'add':

                    // Load and update link object with new assignment
                    $link_obj = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_option_link_obj($params['link_obj_id']);
                    if (!empty($link_obj) && isset($link_obj->id) && !Disciple_Tools_Bulk_Magic_Link_Sender_API::is_already_assigned($record->id, $link_obj)) {

                        // Update link object accordingly
                        $link_obj->type       = $params['magic_link_type'];

                        /**
                         * If record is of supported type, then also generate a new link
                         * which is also returned within response payload!
                         */
                        if (in_array(strtolower(trim($record->type)), Disciple_Tools_Bulk_Magic_Link_Sender_API::$assigned_supported_types)) {

                            // Create new magic link
                            Disciple_Tools_Bulk_Magic_Link_Sender_API::update_magic_links($link_obj, [$record], false);

                            // Also update base timestamp and future expiration points
                            if (isset($params['links_expire_within_amount'], $params['links_expire_within_time_unit'], $params['links_never_expires'])) {

                                $base_ts       = time();
                                $amt           = $params['links_expire_within_amount'];
                                $time_unit     = $params['links_expire_within_time_unit'];
                                $never_expires = in_array(strtolower($params['links_never_expires']), ['true']);

                                $record = Disciple_Tools_Bulk_Magic_Link_Sender_API::refresh_user_links_expiration_values($record, $base_ts, $amt, $time_unit, $never_expires);
                            }

                            // Capture newly created magic link in url form
                            $magic_link_type = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_magic_link_type($link_obj->type);
                            $response['ml_links'][Disciple_Tools_Bulk_Magic_Link_Sender_API::generate_magic_link_type_key($link_obj)] = [
                                'url' => Disciple_Tools_Bulk_Magic_Link_Sender_API::build_magic_link_url($link_obj, $record, $magic_link_type['url_base'], false),
                                'expires' => [
                                    'ts' => $record->links_expire_on_ts ?? '',
                                    'ts_formatted' => $record->links_expire_on_ts_formatted ?? '---',
                                    'ts_base' => $record->links_expire_within_base_ts ?? ''
                                ]
                            ];
                        }

                        // Add record to the collective
                        $link_obj->assigned[] = $record;

                        // Save updated link object
                        Disciple_Tools_Bulk_Magic_Link_Sender_API::update_option_link_obj($link_obj);

                        // All is well.. ;)
                        $response['success'] = true;
                        $response['record']  = $record;
                    } else {
                        $response['success'] = false;
                        $response['message'] = 'Unable to execute action[' . $params['action'] . '], due to invalid link object and/or record already assigned.';
                    }

                    break;

                case 'delete':

                    // Load and update link object with new assignment
                    $link_obj = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_option_link_obj($params['link_obj_id']);
                    if (!empty($link_obj) && isset($link_obj->id) && Disciple_Tools_Bulk_Magic_Link_Sender_API::is_already_assigned($record->id, $link_obj)) {

                        // Update link object accordingly
                        $updated_assigned = [];
                        foreach ($link_obj->assigned ?? [] as $already_assigned) {
                            if ($already_assigned->id !== $record->id) {
                                $updated_assigned[] = $already_assigned;
                            }
                        }
                        $link_obj->assigned = $updated_assigned;
                        $link_obj->type     = $params['magic_link_type'];

                        // Save updated link object
                        Disciple_Tools_Bulk_Magic_Link_Sender_API::update_option_link_obj($link_obj);

                        /**
                         * If record is of supported type, then also attempt to remove any
                         * associated magic links.
                         */
                        if (in_array(strtolower(trim($record->type)), Disciple_Tools_Bulk_Magic_Link_Sender_API::$assigned_supported_types)) {
                            Disciple_Tools_Bulk_Magic_Link_Sender_API::update_magic_links($link_obj, [$record], true);
                        }

                        // All is well.. ;)
                        $response['success'] = true;
                    } else {
                        $response['success'] = false;
                        $response['message'] = 'Unable to execute action[' . $params['action'] . '], due to invalid link object and/or record not already assigned.';
                    }

                    break;

                case 'link':
                    // TODO...
                    break;
            }
        } else {
            $response['success'] = false;
            $response['message'] = 'Unable to execute action, due to missing parameters.';
        }

        return $response;
    }

    public function send_now(WP_REST_Request $request): array {

        // Prepare response payload
        $response = [];

        // Ensure required parameters have been specified
        $params = $request->get_params();
        if (isset($params['assigned'], $params['link_obj_id'], $params['links_expire_within_amount'], $params['links_expire_within_time_unit'], $params['links_never_expires'], $params['links_refreshed_before_send'], $params['links_expire_auto_refresh_enabled'])) {

            // Load logs
            $logs   = Disciple_Tools_Bulk_Magic_Link_Sender_API::logging_load();
            $logs[] = Disciple_Tools_Bulk_Magic_Link_Sender_API::logging_create('[SEND NOW REQUEST]');

            // Attempt to load link object based on submitted id
            $link_obj = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_option_link_obj($params['link_obj_id']);
            if (!empty($link_obj)) {

                $logs[] = Disciple_Tools_Bulk_Magic_Link_Sender_API::logging_create('Processing Link Object: ' . $link_obj->name);

                /**
                 * Update link object with most recent key settings!
                 */

                if (empty($link_obj->link_manage)) {
                    $link_obj->link_manage = (object) [];
                }
                $link_obj->link_manage->links_expire_within_amount        = $params['links_expire_within_amount'];
                $link_obj->link_manage->links_expire_within_time_unit     = $params['links_expire_within_time_unit'];
                $link_obj->link_manage->links_never_expires               = in_array(strtolower($params['links_never_expires']), ['true']);
                $link_obj->schedule->links_refreshed_before_send       = in_array(strtolower($params['links_refreshed_before_send']), ['true']);
                $link_obj->link_manage->links_expire_auto_refresh_enabled = in_array(strtolower($params['links_expire_auto_refresh_enabled']), ['true']);

                /**
                 * If present, capture latest message text.
                 */

                if (!empty($params['message_subject'])) {
                    $link_obj->message_subject = $params['message_subject'];
                }

                if (!empty($params['message'])) {
                    $link_obj->message = $params['message'];
                }

                /**
                 * Loop over assigned users and members; which have been submitted and not loaded;
                 * as submitted params provide the most recent snapshot of link object shapes!
                 */

                $updated_assigned = [];
                foreach ($params['assigned'] ?? [] as $assigned) {

                    $assigned = (object) $assigned;
                    if (in_array(strtolower(trim($assigned->type)), Disciple_Tools_Bulk_Magic_Link_Sender_API::$assigned_supported_types)) {

                        // Process send request to assigned user, using available contact info
                        $send_response = Disciple_Tools_Bulk_Magic_Link_Sender_API::send($link_obj, $assigned, $logs);

                        // Capture any updates
                        $link_obj           = $send_response['link_obj'];
                        $updated_assigned[] = $send_response['user'];
                    } else {
                        $updated_assigned[] = $assigned;
                    }
                }

                // Capture any potentially changed assignments and save updated link object
                $link_obj->assigned = $updated_assigned;
                Disciple_Tools_Bulk_Magic_Link_Sender_API::update_option_link_obj($link_obj);

                // Return successful response and updated assigned list
                $response['success']  = true;
                $response['message']  = 'Send request completed - See logging tab for further details.';
                $response['assigned'] = $updated_assigned;
            } else {
                $msg    = 'Unable to locate corresponding link object for id: ' . $params['link_obj_id'];
                $logs[] = Disciple_Tools_Bulk_Magic_Link_Sender_API::logging_create($msg);

                $response['success'] = false;
                $response['message'] = $msg;
            }

            // Update logging information
            Disciple_Tools_Bulk_Magic_Link_Sender_API::logging_update($logs);
        } else {
            $response['success'] = false;
            $response['message'] = 'Unable to send any messages, due to unrecognizable parameters.';
        }

        return $response;
    }

    public function next_scheduled_run(WP_REST_Request $request): array {

        // Prepare response payload
        $response = [];
        $response['success'] = false;

        $params = $request->get_params();
        if (!isset($params['link_obj_id'])) {
            $response['message'] = 'Unable to detect required link object id!';
        } else {
            $response['message'] = '';
            $response['next_run_ts'] = 0;
            $response['next_run_label'] = '---';
            $response['next_run_relative'] = '---';

            $link_obj = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_option_link_obj($params['link_obj_id']);
            if (!empty($link_obj) && $link_obj->enabled) {
                if ((isset($link_obj->schedule->enabled) && $link_obj->schedule->enabled) && !empty($link_obj->schedule->freq_amount) && !empty($link_obj->schedule->freq_time_unit) && !empty($link_obj->schedule->last_schedule_run)) {
                    $next_run = strtotime('+' . $link_obj->schedule->freq_amount . ' ' . $link_obj->schedule->freq_time_unit, $link_obj->schedule->last_schedule_run);
                    $next_scheduled_run = Disciple_Tools_Bulk_Magic_Link_Sender_API::format_timestamp_in_local_time_zone($next_run);
                    $next_scheduled_run_relative = Disciple_Tools_Bulk_Magic_Link_Sender_API::determine_relative_date($next_run);

                    $response['success'] = true;
                    $response['next_run_ts'] = ($next_run > time()) ? $next_run : 0;
                    $response['next_run_label'] = ($next_run > time()) ? $next_scheduled_run : '---';
                    $response['next_run_relative'] = ($next_run > time()) ? $next_scheduled_run_relative : '---';
                }
            }
        }

        return $response;
    }

    public function get_report(WP_REST_Request $request): array {

        // Prepare response payload
        $response = [];

        if (!isset($request->get_params()['id'])) {
            $response['success'] = false;
            $response['message'] = 'Unable to detect required report id!';
            $response['report']  = null;
        } else {
            $id      = $request->get_params()['id'];
            $report  = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_report($id);
            $success = !empty($report);

            $response['success'] = $success;
            $response['message'] = $success ? 'Loaded data for report id: ' . $id : 'Unable to load data for report id: ' . $id;
            $response['report']  = $success ? $report : null;
        }

        return $response;
    }

    public function references(WP_REST_Request $request): array {

        // Prepare response payload
        $response = [];

        $params = $request->get_params();
        if (isset($params['action'])) {

            // Execute accordingly, based on specified action
            switch ($params['action']) {
                case 'refresh':
                    $response['success'] = true;
                    $response['message'] = 'References action[' . $params['action'] . '] successfully executed.';
                    break;
            }
        } else {
            $response['success'] = false;
            $response['message'] = 'Unable to execute action, due to missing parameters.';
        }

        return $response;
    }

    public function typeahead_users_teams_groups(WP_REST_Request $request): array {
        $query = $request->get_params()['s'] ?? null;

        $dt_users = [];
        $dt_teams = [];
        $dt_groups = [];

        if (!empty($query)) {
            $dt_users = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_dt_users(true, [
                'type' => 'name',
                'query' => $query
            ]);
            $dt_teams = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_dt_teams(true, [
                'type' => 'name',
                'query' => $query
            ]);
            $dt_groups = Disciple_Tools_Bulk_Magic_Link_Sender_API::fetch_dt_groups(true, [
                'type' => 'name',
                'query' => $query
            ]);
        }

        return [
            'dt_users' => $dt_users,
            'dt_teams' => $dt_teams,
            'dt_groups' => $dt_groups
        ];
    }

    private static $_instance = null;

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }


        return self::$_instance;
    } // End instance()

    public function __construct() {
        add_action('rest_api_init', [$this, 'add_api_routes']);
    }

    public function has_permission() {
        $pass = false;
        foreach ($this->permissions as $permission) {
            if (current_user_can($permission)) {
                $pass = true;
            }
        }

        return $pass;
    }


    // SORT ORDER METHODS
    public function exists_magic_link_fields_sort_order() {
        $response = $wpdb->get_results("
            SELECT EXISTS(
            SELECT *
            FROM $wpdb->options
            WHERE 'option_name' = 'magic_link_field_sort_order')
        ", ARRAY_A);

        return $response;
    }

    public function get_magic_link_fields_sort_order() {
        $response = [];
        return $response;
    }

    public function add_magic_link_fields_sort_order(WP_REST_Request $request) {
        $params = $request->get_params();

        global $wpdb;
        $wpdb->insert(
            $wpdb->prefix . 'options',
            array(
                'option_name' => 'magic_link_fields_sort_order',
                'option_value' => $params['sort_order']
            )
        );

        return [
            'success' => true,
            'message' => 'Added magic link fields sort order.'
        ];
    }

    public function update_magic_link_fields_sort_order(WP_REST_Request $request) {
        $params = $request->get_params();

        global $wpdb;
        $wpdb->update(
            $wpdb->prefix . 'options',
            array(
                'option_value' => $params['sort_order'],
            ),
            array(
                'option_name' => 'magic_link_fields_sort_order'
            )
        );

        return [
            'success' => true,
            'message' => 'Updated magic link fields sort order.'
        ];
    }
    // e.o SORT ORDER METHODS -----


    #region CUSTOM BRANDING METHODS

    #region Name
    // Add Magic Link Custom Branding
    public function add_magic_link_custom_branding(WP_REST_Request $request) {
        $params = $request->get_params();

        global $wpdb;

        try {
            $wpdb->insert(
                $wpdb->prefix . 'options',
                array(
                    'option_name' => 'magic_link_custom_branding',
                    'option_value' => $params['custom_branding']
                )
            );

            return [
                'success' => true,
                'message' => 'Added magic link custom branding.'
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    } // e.o Add Magic Link Custom Branding

    // Update Magic Link Custom Branding
    public function update_magic_link_custom_branding(WP_REST_Request $request) {
        $params = $request->get_params();

        global $wpdb;
        $wpdb->update(
            $wpdb->prefix . 'options',
            array(
                'option_value' => $params['custom_branding'],
            ),
            array(
                'option_name' => 'magic_link_custom_branding'
            )
        );

        return [
            'success' => true,
            'message' => 'Updated magic link custom branding.'
        ];
    } // e.o Update Magic Link Custom Branding

    #endregion Name

    #region Icon
    // Handle Upload Custom Branding Icon
    public function handle_upload_custom_branding_icon(WP_REST_Request $request) {
        // Prep variables
        $file           = $request->get_file_params()['file'];  // Get the uploaded file
        $ml_id          = $request->get_params()['ml_id'];                      // Get the magic link id
        $option_name    = 'magic_link_custom_branding_icon' . $ml_id;           // Set option name for shorter name

        // Validate file type (e.g., only allow images)
        $allowed_file_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($file['type'], $allowed_file_types)) {
            return new WP_Error('invalid_file_type', 'Only JPEG, PNG, and GIF files are allowed.', ['status' => 400]);
        }

        // Prep upload directory
        $upload_dir     = wp_upload_dir();
        $upload_path    = $upload_dir['path'] . '/' . basename($file['name']);
        $upload_url     = $upload_dir['url'] . '/' . basename($file['name']);

        // Check if branding already exists
        $existing_branding = get_option($option_name);
        if ($existing_branding) {

            // Delete the existing file
            $existing_file_path = str_replace($upload_dir['url'], $upload_dir['path'], $existing_branding);
            if (file_exists($existing_file_path)) {
                unlink($existing_file_path);
            }
        }

        // Move the new file to the uploads directory
        if (!move_uploaded_file($file['tmp_name'], $upload_path)) {
            return new WP_Error('upload_failed', 'Failed to upload the file.', ['status' => 500]);
        }

        // Update the option value with the new file URL
        update_option($option_name, $upload_url);

        // Return response
        return new WP_REST_Response(
            [
                'message'   => 'Custom branding icon uploaded successfully.',
                'url'       => $upload_url,
                'mlid'      => $option_name
            ],
            200
        );
    } // e.o Handle Upload Custom Branding Icon

    // Delete Custom Branding Icon
    public function delete_custom_branding_icon(WP_REST_Request $request) {
        $ml_id = $request->get_params()['ml_id'];
        $option_name = 'magic_link_custom_branding_icon' . $ml_id;

        $icon_url = get_option($option_name);

        if ($icon_url) {
            $upload_dir = wp_upload_dir();
            $file_path = str_replace($upload_dir['url'], $upload_dir['path'], $icon_url);

            if (file_exists($file_path)) {
                unlink($file_path);
            }

            delete_option($option_name);

            return new WP_REST_Response(
                [
                    'success' => true,
                    'message' => 'Custom branding icon deleted successfully.'
                ]
            );
        } else {
            return new WP_REST_Response(
                [
                    'success' => false,
                    'message' => 'No custom branding icon found.'
                ]
            );
        }
    } // e.o Delete Custom Branding Icon

    // Get Custom Branding Icon
    public function get_custom_branding_icon(WP_REST_Request $request) {
        $params = $request->get_params();
        $ml_id = $params['ml_id'];
        $option_name = 'magic_link_custom_branding_icon' . $ml_id;

        $icon_url = get_option($option_name);

        return new WP_REST_Response(
            [
                'icon_url' => $icon_url
            ]
        );
    } // e.o Get Custom Branding Icon

    #endregion Icon

    #region Display Options
    // Get Custom Branding Display Options
    public function get_custom_branding_display_options(WP_REST_Request $request) {
        $ml_id = $request->get_params()['ml_id'];                                           // Get the magic link id
        $option_name = 'magic_link_custom_branding_display_options' . $ml_id;                // Set option name for shorter name

        $branding_options = get_option($option_name);

        return new WP_REST_Response(
            [
                'branding_options' => $branding_options
            ]
        );
    } // e.o Get Custom Branding Display Options

    // Save Custom Branding Display Options
    public function save_custom_branding_display_options(WP_REST_Request $request) {
        $ml_id              = $request->get_params()['ml_id'];                              // Get the magic link id
        $display_options   = $request->get_params()['display_options'];                   // Get the branding display options
        $option_name        = 'magic_link_custom_branding_display_options' . $ml_id;         // Set option name for shorter name
        $existing_branding  = get_option($option_name);                                     // Get the existing branding display options

        if ($existing_branding) {
            // Update the existing option
            update_option($option_name, $display_options);
        } else {
            // Add the new option
            add_option($option_name, $display_options);
        }

        return new WP_REST_Response(
            [
                'success' => true,
                'message' => 'Custom branding display options saved successfully.',
                'option'    => $display_options
            ]
        );
    } // e.o Save Custom Branding Display Options
    #endregion Display Options

    #region Enable
    // Get Custom Branding Enable
    public function get_custom_branding_enable(WP_REST_Request $request) {
        $ml_id              = $request->get_params()['ml_id'];                  // Get the magic link id
        $option_name        = 'magic_link_custom_branding_enable' . $ml_id;     // Set option name for shorter name
        $branding_enable    = get_option($option_name);

        return new WP_REST_Response(
            [
                'branding_enable' => $branding_enable
            ]
        );
    } // e.o Get Custom Branding Enable

    // Save Custom Branding Enable
    public function save_custom_branding_enable(WP_REST_Request $request) {
        $ml_id              = $request->get_params()['ml_id'];                              // Get the magic link id
        $enabled            = $request->get_params()['enable'];                             // Get the branding display options
        $option_name        = 'magic_link_custom_branding_enable' . $ml_id;                 // Set option name for shorter name
        $existing_branding  = get_option($option_name);                                     // Get the existing branding display options

        if ($existing_branding) {
            update_option($option_name, $enabled);  // Update the existing option
        } else {
            add_option($option_name, $enabled);     // Add the new option
        }

        return new WP_REST_Response(
            [
                'success'   => true,
                'message'   => 'Custom branding enable saved successfully.',
                'option'    => $enabled
            ]
        );
    } // e.o Save Custom Branding Enable

    #endregion Enable

    #region Name
    // Get Custom Branding Name
    public function get_custom_branding_name(WP_REST_Request $request) {
        $ml_id = $request->get_params()['ml_id'];                               // Get the magic link id
        $option_name = 'magic_link_custom_branding_name' . $ml_id;              // Set option name for shorter name

        $branding_name = get_option($option_name);

        return new WP_REST_Response(
            [
                'branding_name' => $branding_name
            ]
        );
    } // e.o Get Custom Branding Name

    // Save Custom Branding Name
    public function save_custom_branding_name(WP_REST_Request $request) {
        $ml_id              = $request->get_params()['ml_id'];                  // Get the magic link id
        $branding_name      = $request->get_params()['name'];                   // Get the branding display options
        $option_name        = 'magic_link_custom_branding_name' . $ml_id;       // Set option name for shorter name
        $existing_branding  = get_option($option_name);                         // Get the existing branding display options

        if ($existing_branding) {
            update_option($option_name, $branding_name);  // Update the existing option
        } else {
            add_option($option_name, $branding_name);     // Add the new option
        }

        return new WP_REST_Response(
            [
                'success'   => true,
                'message'   => 'Custom branding name saved successfully.',
                'option'    => $branding_name
            ]
        );
    } // e.o Save Custom Branding Name

    #endregion Name

    #endregion CUSTOM BRANDING METHODS
}

Disciple_Tools_Bulk_Magic_Link_Sender_Endpoints::instance();
