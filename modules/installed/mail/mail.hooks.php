<?php
new hook("accountMenu", function ($user) {
    if ($user) return array(
        "url" => "?page=mail", 
        "text" => "Mail", 
        "sort" => -10,
        "extraID" => "mail", 
        "extra" => $user->getNotificationCount($user->info->U_id, 'mail')
    );
});
new hook("profileLink", function ($user) { 
    return array(
        "url" => "?page=mail&action=new&name=" . $user->info->U_name, 
        "text" => "Mail"
    );
});

new Hook("clearRound", function () {
    global $db, $page;
    $db->delete("TRUNCATE TABLE mail;");
    $page->alert("mail cleared", "info");
});
// * Clear user entries hook
new Hook('deleteUserEntries', function ($userId) {
    global $db;
    $db->delete("DELETE FROM `mail` WHERE `M_sid` = :id;", [":id" => $userId]);
    $db->delete("DELETE FROM `mail` WHERE `M_uid` = :id;", [":id" => $userId]);
});