
 case 1:  success case
 
 execution will run only a single test file.
 
 php ./vendor/bin/phpunit app/code/Mytask/UnitTestHello/Test/Unit/SampleTest.php 

 success result below like:

 PHPUnit 9.6.15 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.003, Memory: 10.00 MB

OK (1 test, 1 assertion)

case 2: failed test run

	Run the unit test 
	
		 	 php ./vendor/bin/phpunit app/code/Mytask/UnitTestHello/Test/Unit/HelloTestfail.php 
	
	It will show below result
	
		PHPUnit 9.6.15 by Sebastian Bergmann and contributors.
		
		F                                                                   1 / 1 (100%)
		
		Time: 00:00.006, Memory: 10.00 MB
		
		There was 1 failure:
		
		1) Mytask\UnitTestHello\Test\Unit\HelloTestfail::testGreet
		Failed asserting that two strings are equal.
		--- Expected
		+++ Actual
		@@ @@
		-'Hello, World!'
		+'Hello, World'
		
		/home/something/magento/app/code/Mytask/UnitTestHello/Test/Unit/HelloTestfail.php:20
		
		FAILURES!
		Tests: 1, Assertions: 1, Failures: 1.
