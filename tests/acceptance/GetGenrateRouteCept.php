<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure I get a test string response');
$I->amOnPage('/api/generate');
$I->see('test');
