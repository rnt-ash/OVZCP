<?php

$messages = [

    // examples
    "hi"      => "Hello",
    "bye"     => "Good Bye",
    "hi-name" => "Hello %name%",
    "song"    => "This song is %song%",
    
    // access
    "access_login_panelheader" => "Login",
    "access_loginname" => "loginname",
    "access_password" => "password",
    "access_forgott_password" => "Forgott password?",
    "access_login_button" => "Login",
    
    // index
    "index_dashboard" => "Dashboard",
    "index_welcome" => "Welcome to the World of OVZ Control Panel.",
    "index_inventory" => "Inventory",
    "index_inventory_teaser" =>"Looking for VirtualServers on connected PhysicalServers and collect those VirtualServers and save them in OVZ Control Panel.",
    
    // Customers
    "customers_customers" => "customers",
    "customers_at_least_lastname_or_company_must_be_set" => "At least lastname or company must be set.",
    
    // Colocations
    "colocations_invalid_level" => "invalid level!",
    "colocations_choose_customer" => "Please, choose a customer...",
    "colocations_customer" => "customer",
    "colocations_name" => "name",
    "colocations_colocationname" => "My colocation name",
    "colocations_description" => "description",
    "colocations_description_info" => "some additional information to this colocation...",
    "colocations_location" => "location",
    "colocations_location_info" => "My location",
    "colocations_activ_date" => "activation date",
    "colocations_name_required" => "name required",
    "colocations_namemax" => "name is to long",
    "colocations_namemin" => "name is to short",
    "colocations_name_valid" => "Name must be alphanumeric and may contain the characters \, -, _ and space.",
    "colocations_customer_required" => "customer required",
    "colocations_location_max" => "location is to long",
    "colocations_location_max" => "location is to short",
    "colocations_locaton_valid" => "location must be alphanumeric and may contain the characters \, -, _ and space.", 

    // IP Objects
    "ipobjects_address_is_now_main" => "IP Address %address% is now main.",
    "ipobjects_item_not_found" => "item was not found!",
    "ipobjects_item_not_exist" => "item does not exist!",
    "ipobjects_ip_success" => "IP Adress was updated successfully",
    "ipobjects_ip_not_found" => "IP object was not found !",
    "ipobjects_ip_conf_failed" => "Configure IP on virtual server failed: ",
    "ipobjects_ip_delete_success" => "IP Object was deleted successfully",
    "ipobjects_ip_adress" => "IP object must be an adress",
    "ipobjects_ip_assigned" => "IP Object must be assigned",
    "ipobjects_ip_update_failed" => "Update IP Object failed!",
    "ipobjects_ip" => "IP adress",
    "ipobjects_ip_addition" => "Additional IP Value",
    "ipobjects_ip_additioninfo" => "Empty | Subnetmask if IP Address | End IP Address if Range | Prefix if Subnet",
    "ipobjects_allocated" => "Allocated",
    "ipobjects_ismain" => "Is main",
    "ipobjects_isnotmain" => "Is not main",
    "ipobjects_ip_main" => "Main IP",
    "ipobjects_comment" => "comment",
    "ipobjects_commentinfo" => "Some additional information to IP Object",
    "ipobjects_dco_submit" => "No DCO submitted.",
    "ipobjects_ip_not_valid" => "Not a valid IP Address",
    "ipobjects_secont_value_valid" => "Not a valid second value",
    "ipobjects_assigned_ip" => "Assigned IPs can't be range or net",
    "ipobjects_no_reservation" => "No reservations found.",
    "ipobjects_ip_notpart_reservation" => "IP is not part of an existing reservation.",
    "ipobjects_ip_already_exists" => "IP already exists.",
    "ipobjects_ip_required" => "IP adress is required",
    "ipobjects_ip_valid" => "Wrong characters in IP Address.",
    "ipobjects_second-value_check" => "Wrong characters in second Value.",
    "ipobjects_main" => "Main can only be 0 or 1.",
    "ipobjects_allocated_value" => "Please choose a correct Allocated Value.",
    "ipobjects_comment_length" => "Comment is too long (max. 50 characters)",
    "ipobjects_unexpected_type" => "Unexpected Type!",
      
    // Physical Servers
    "physicalserver_does_not_exist" => "Physical Server does not exist: ",
    "physicalserver_not_ovz_enabled" => "Server ist not OVZ enabled!",
    "physicalserver_job_failed" => "Executing the following job failed: ",
    "physicalserver_update_failed" => "Updating the server failed: ",
    "physicalserver_update_success" => "Settings successfully updated",
    "physicalserver_remove_server_first" => "Please remove virtual server first !",
    "physicalserver_not_found" => "Physical server not found !",
    "physicalserver_connection_success" => "Connection successfully established to: ",
    "physicalserver_connection_restart" => "It's strongly recommended to restart the server after connecting!",
    "physicalserver_connection_failed" => "Connection to OVZ failed: ",
    "physicalserver_name" => "Name",
    "physicalserver_myserver" => "My Server",
    "physicalserver_fqdn" => "FQDN",
    "physicalserver_hostdomaintld" => "host.domain.tld",
    "physicalserver_choose_customer" => "Please, choose a customer...",
    "physicalserver_customer" => "Customer",
    "physicalserver_choose_colocation" => "Please, choose the colocation...",
    "physicalserver_colocation" => "colocation",
    "physicalserver_cores" => "cores",
    "physicalserver_cores_available" => "available cores  (e.g. 4)",
    "physicalserver_memory" => "memory",
    "physicalserver_memory_available" => "available memory in MB (e.g. 2048)",
    "physicalserver_space_" => "space",
    "physicalserver_space_available" => "available space in MB (e.g. 102400)",
    "physicalserver_activ_date" => "activation date",
    "physicalserver_discription" => "discription",
    "physicalserver_discription_info" => "some additional information to this server...",
    "physicalserver_name_required" => "name is required",
    "physicalserver_messagemax" => "name too long",
    "physicalserver_messagemax" => "name too short",
    "physicalserver_name_valid" => "Name must be alphanumeric and may contain the characters \, -, _ and space.",
    "physicalserver_fqdn_required" => "FQDN is required",
    "physicalserver_fqdn_valid" => "must be a String separated by points",
    "physicalserver_core_required" => "core is required",
    "physicalserver_memory_required" => "memory is required",
    "physicalserver_space_required" => "space is required",
    "physicalserver_username" => "username",
    "physicalserver_root" => "root",
    "physicalserver_username_required" => "username is required",
    "physicalserver_password" => "password",
    "physicalserver_password_required" => "password is required",
    "physicalserver_permission" => "Not allowed for this Physical Server",
    "physicalserver_not_ovz_integrated" => "Physical Server is not OVZ integrated.",
    "physicalserver_job_create_failed" => "Creating Physical Server failed: ",
       
    // Virtual Server

    "virtualserver_does_not_exist" => "Virtual server does not exist: ",
    "virtualserver_not_ovz_integrated" => "Virtual server is not OVZ integrated",
    "virtualserver_job_failed" => "Job (ovz_modify_vs) executions failed! Error: ",
    "virtualserver_update_failed" => "Updating the virual server failed: .",
    "virtualserver_invalid_level" => "invalid level!",
    "virtualserver_not_ovz_enabled" => "Virtual Server ist not OVZ enabled!",
    "virtualserver_job_infolist_failed" => "Job (ovz_list_info) executions failed: ",
    "virtualserver_settings_success" => "Settings successfully updated",
    "virtualserver_job_start_failed" => "Job (ovz_start_vs) executions failed: ",
    "virtualserver_job_start" => "Started virtual server successfully",
    "virtualserver_job_stop_failed" => "Job (ovz_stop_vs) executions failed: ",
    "virtualserver_job_stop" => "Stopped virtual server successfully",
    "virtualserver_job_restart_failed" => "Job (ovz_restart_vs) executions failed: ",
    "virtualserver_job_restart" => "Restarted virtual server successfully",
    "virtualserver_not_found" => "Virtual server not found.",
    "virtualserver_job_destroy_failed" => "Deleting/ Destroying Virtual server failed: ",
    "virtualserver_job_destroy" => "Virtual server deleted/ destroyed sucessfully.",
    "virtualserver_job_ostemplates_failed" => "Job (ovz_get_ostemplates) executions failed!",
    "virtualserver_job_listsnapshots_failed" => "Job (ovz_list_snapshots) executions failed!",
    "virtualserver_snapshot_update" => "Snapshots successfully updated",
    "virtualserver_job_switchsnapshotexec_failed" => "Job (ovz_switch_snapshot) executions failed!",
    "virtualserver_job_switchsnapshot_failed" => "Switching snapshot on server failed: ",
    "virtualserver_job_createsnapshotexec_failed" => "Job (ovz_create_snapshot) executions failed!",
    "virtualserver_job_createsnapshot_failed" => "Create snapshot on server failed: ",
    "virtualserver_job_deletesnapshotexec_failed" => "Job (ovz_delete_snapshot) executions failed!",
    "virtualserver_job_createsnapshot_failed" => "Deleting snapshot on server failed: ",
    "virtualserver_IP_not_valid" => " is not a valid IP address",
    "virtualserver_min_core" => "minimum core is 1",
    "virtualserver_max_core" => "Virtual server can not have more cores than the host (host cores: ",
    "virtualserver_ram_numeric" => "RAM is nor numeric",
    "virtualserver_min_ram" => "Minimum RAM is 512 MB",
    "virtualserver_max_ram" => "Virtual Server can not have more memory than the host (host memory: ",
    "virtualserver_space_numeric" => "Space is not numeric",
    "virtualserver_min_space" => "Minimum space is 20 GB",
    "virtualserver_max_space" => "Virtual Server can not use more space than the host (host space: ",
    "virtualserver_job_modifysnapshotexec_failed" => "Job (ovz_modify_vs) executions failed: ",
    "virtualserver_job_modifyvs" => "Modifying virtual server successfully",
    "virtualserver_name" => "Name",
    "virtualserver_myserver" => "My Server",
    "virtualserver_choose_customer" => "Please choose a customer...",
    "virtualserver_customer" => "customer",
    "virtualserver_choose_physicalserver" => "Please choose a physical server...",
    "virtualserver_physicalserver" => "Physical servers",
    "virtualserver_cores" => "Cores",
    "virtualserver_cores_example" => "available cores  (e.g. 4)",
    "virtualserver_memory" => "Memory",
    "virtualserver_memory_example" => "available memory in MB (e.g. 2048)",
    "virtualserver_space" => "Space",
    "virtualserver_space_example" => "available space in MB (e.g. 102400)",
    "virtualserver_activdate" => "Activation date",
    "virtualserver_description" => "description",
    "virtualserver_description_info" => "some additional information to this server...",
    "virtualserver_rootpassword" => "Root password",
    "virtualserver_choose_ostemplate" => "Please choose a OS template",
    "virtualserver_name_required" => "name is required",
    "virtualserver_namemax" => "name is to long",
    "virtualserver_namemin" => "name is to short",
    "virtualserver_name_valid" => "Name must be alphanumeric and may contain the characters \, -, _ and space.",
    "virtualserver_fqdn_valid" => "must be a String separated by points",
    "virtualserver_customer_required" => "customer is required",
    "virtualserver_physicalserver_required" => "Physical server is required",
    "virtualserver_core_required" => "core is required",
    "virtualserver_memory_required" => "memory is required",
    "virtualserver_space_required" => "space is required",
    "virtualserver_password_required" => "password required",
    "virtualserver_passwordmin" => "Password is to short. Minumum 8 characters",
    "virtualserver_ostemplate_required" => "OS Template required",
    "virtualserver_hostname" => "hostname",
    "virtualserver_hostname_valid" => "must be a string separated by points",
    "virtualserver_memory_specify" => "please specify if it is either GB or MB",
    "virtualserver_discspace" => "discspace",
    "virtualserver_discspace_example" => "available space in GB  (e.g. 100)",
    "virtualserver_discspace_required" => "Diskspace is required",
    "virtualserver_discspace_specify" => "please specify if it is either TB,GB or MB",
    "virtualserver_dnsserver" => "DNS-Server",
    "virtualserver_startonboot" => "Start on boot",
    "virtualserver_startonboot_info" => "Start on boot can either be 0 or 1",
    "virtualserver_snapshotname" => "Snapshotname",
    "virtualserver_snapshotname_replica" => "Name must not contain replica.",
    "virtualserver_snapshotname_required" => "Name must be alphanumeric and may contain the characters -_().!? and space.",
    "virtualserver_description_valid" => "Description mus not longer be than 250 characters",

    // Push
    "push_parameter_pending_is_not_a_string_or_an_array" => "Parameter pending is not a string or an array.",
    "push_entity_is_pending" => "The representative entity is pending. Cannot execute job directly now.",
    "push_execute_job_failed" => "Execute Job failed: ",
    "push_insert_job_failed" => "Job insert failed: ",
    "push_update_job_failed" => "Job update failed: ",
    "push_problems_while_job_execution" => "Problems occured while executing jobs: ",
    "push_dependency_not_set" => "Dependency has to be set and must be bigger than 0", 
    "push_dependency_parent_failed" => "Job cannot be executed and has failed because the parent Job failed.",
    "push_dependency_parent_running" => "Job cannot be executed because parent Job hasn't finished successfully yet.",
    "push_pending_entity_not_implements_interface" => "The created pending entity does not implement the needed interface.",
    "push_key_id_not_in_response" => "Key id does not exist in job response.",
    "push_key_executed_not_in_response" => "Key executed does not exist in job response.",
    "push_key_done_not_in_response" => "Key done does not exist in job response.",
    "push_key_error_not_in_response" => "Key error does not exist in job response.",
    "push_key_warning_not_in_response" => "Key warning does not exist in job response.",
    "push_key_retval_not_in_response" => "Key retval does not exist in job response.",
];
