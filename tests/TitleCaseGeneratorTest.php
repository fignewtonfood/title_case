<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneLetter()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "i";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("I", $result);
        }

        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "george";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("George", $result);
        }

        function test_makeTitleCase_multWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "george smith";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("George Smith", $result);
        }

        function test_makeTitleCase_ignoreArticle()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "george goes to the store";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("George Goes to the Store", $result);
        }

        function test_makeTitleCase_ignoreArticleException()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the george and the fury";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The George and the Fury", $result);
        }

        function test_makeTitleCase_allCapsToTitle()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "GEORGE";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("George", $result);
        }

        function test_makeTitleCase_mixedCapsToTitle()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "GeOrGe";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("George", $result);
        }

        function test_makeTitleCase_specialCharacters()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input ="17 georges!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("17 Georges!", $result);
        }

        function test_makeTitleCase_intrawordExceptions()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "george maccloud";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("George MacCloud", $result);
        }
    }
?>
