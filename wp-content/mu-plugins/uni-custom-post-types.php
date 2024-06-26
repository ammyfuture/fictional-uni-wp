<?php 

function uni_custom_post_types() {


    register_post_type("event", array(
        "capability_type" => "event",
        "map_meta_cap" => true,
        "supports" => array("title", "editor", "excerpt"),
        "rewrite" => array("slug" => "events"),
        "has_archive" => true,
        "public" => true,
        'show_in_rest' => true,
        "labels" => array(
            "name" => "Events",
            "add_new_item" => "Add New Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event",
            "add_new" => "Add New Event"
        ), 
        "menu_icon" => "dashicons-calendar"
    ));


    register_post_type("program", array(
        "supports" => array("title"),
        "rewrite" => array("slug" => "programs"),
        "has_archive" => true,
        "public" => true,
        'show_in_rest' => true,
        "labels" => array(
            "name" => "Programs",
            "add_new_item" => "Add New Program",
            "edit_item" => "Edit Programs",
            "all_items" => "All Programs",
            "singular_name" => "Program",
            "add_new" => "Add New Program"
        ), 
        "menu_icon" => "dashicons-awards"
    ));



    register_post_type("professor", array(
        "supports" => array("title", "editor", "thumbnail"),
        "public" => true,
        'show_in_rest' => true,
        "labels" => array(
            "name" => "Professor",
            "add_new_item" => "Add New Professor",
            "edit_item" => "Edit Professor",
            "all_items" => "All Professor",
            "singular_name" => "Professor",
            "add_new" => "Add New Professor"
        ), 
        "menu_icon" => "dashicons-welcome-learn-more"
    ));


    register_post_type("campus", array(
        "capability_type" => "campus",
        "map_meta_cap" => true,
        "supports" => array("title", "editor", "excerpt"),
        "rewrite" => array("slug" => "campuses"),
        "has_archive" => true,
        "public" => true,
        'show_in_rest' => true,
        "labels" => array(
            "name" => "Campuses",
            "add_new_item" => "Add New Campus",
            "edit_item" => "Edit Campus",
            "all_items" => "All Campuses",
            "singular_name" => "Campus",
            "add_new" => "Add New Campus"
        ), 
        "menu_icon" => "dashicons-location-alt"
    ));


    register_post_type("note", array(
        "capability_type" => "note",
        "map_meta_cap" => true,
        "supports" => array("title", "editor"),
        "public" => false,
        "show_ui" => true,
        'show_in_rest' => true,
        "labels" => array(
            "name" => "Notes",
            "add_new_item" => "Add New Note",
            "edit_item" => "Edit Note",
            "all_items" => "All Notes",
            "singular_name" => "Note",
            "add_new" => "Add New Note"
        ), 
        "menu_icon" => "dashicons-welcome-write-blog"
    ));


    register_post_type("like", array(
        "supports" => array("title", ),
        "public" => false,
        "show_ui" => true,
        'show_in_rest' => true,
        "labels" => array(
            "name" => "Likes",
            "add_new_item" => "Add New Like",
            "edit_item" => "Edit Like",
            "all_items" => "All Likes",
            "singular_name" => "Like",
            "add_new" => "Add New Like"
        ), 
        "menu_icon" => "dashicons-heart"
    ));
}

add_action("init", "uni_custom_post_types");