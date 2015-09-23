<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure the public index works');
$I->amOnPage('/');
$I->see('url');
