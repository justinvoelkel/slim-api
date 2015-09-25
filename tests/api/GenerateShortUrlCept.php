<?php 
$I = new ApiTester($scenario);
$I->wantTo('generate a new short url');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('generate', json_encode(["url"=>"http://budgetdumpster.com"]));
$I->seeResponseCodeIs(201);
$I->seeResponseIsJson();
