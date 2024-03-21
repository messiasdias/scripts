#!/bin/php
<?php

exec("erasvpn-list | grep Path:", $sessions); // | awk -F'Path: /net/openvpn/v3/sessions/' '{print $1}'");
foreach($sessions as $session) exec(str_replace("Path: ", "", "erasvpn-disconnect {$session}"));
