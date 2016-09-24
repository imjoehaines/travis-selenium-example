<?php

$I = new AcceptanceTester($scenario);

$I->amOnPage('/');
$I->wait(1);
$I->see('Example', 'h1');
