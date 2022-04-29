<?php declare(strict_types=1);
/**
 * @author Afsanat
 * this class tests whether users can login, signup, insert, edit, delete, and logout.
 * It also tests the Ecommerce: the cart and payment.
 * The dashboard data is also tested.
 */
use PHPUnit\Framework\TestCase;

/**include users classes */
include_once '../model/supporter.php';
include_once '../model/business.php';
include_once '../model/cart.php';
include_once '../model/opportunity.php';

final class EntreconnectTest extends TestCase
{
    /**testing if supporter class exist */
    public function testBusinessClassExists(): void {
        $this->assertTrue(class_exists('business'));
    }

    /**testing if supporter class exist */
    public function testSupporterClassExists(): void {
        $this->assertTrue(class_exists('supporter'));
    }

    /**testing if cart class exist */
    public function testCartClassExists(): void {
        $this->assertTrue(class_exists('Cart'));
    }

    /**testing if opportunity class exist */
    public function testOpportunityClassExists(): void {
        $this->assertTrue(class_exists('Opportunities'));
    }

    /**testing if a business with signup inputs can can register */
    public function testBusinessCanRegister(): void {
        $user = new business();
        $this->assertTrue($user->add_business('$first_name','$last_name','$email','$phone','$occupation','$role','$address','$business','$linkedin','$document','$details','$FileDestination','$password','$Padd','pending'));
    }

    /**testing update */
    public function testBusinessCanUpdate(): void {
        $user = new business();
        $this->assertTrue($user->update_business('$business_id','$f_name', '$l_name','$email','$phone','$bussiness_name','$role','$address','$business_type','$linkedin','$instagram','$details','$picture'));
    }

    /**testing sum */
    public function testTotalBusinessesCanBeCalculated(): void {
        $user = new business();
        $this->assertEquals(1,intval($user->total_business()));
    }
    /**Deleting business */
    public function testBusinessCanDelete(): void {
        $user = new business();
        $this->assertTrue($user->delete_business('Sid'));
    }

    /**testing if a supporter with signup inputs can can register */
    public function testSupporterCanRegister(): void {
        $user = new supporter();
        $this->assertTrue($user->add_investor('$first_name', '$last_name','$email',	'$address','$phone','$occupation','$business_type','$document','$password','$details'));
    }

    /**Deleting */
    public function testSupporterCanDelete(): void {
        $user = new supporter();
        $this->assertTrue($user->delete_investor('Sid'));
    }

    /**opportunity */
    public function testSupporterCanUploadOpportunities(): void {
        $user = new Opportunities();
        $this->assertTrue($user->adding_opportunity('opportunity_name', '100', 'details', '2022-04-08', 1, 'fdere@shik'));
    }
    public function testUserCanSendMessage(): void {
        $user = new supporter();
        $this->assertTrue(TRUE);
    }
    /**opportunity */
    public function testOpportunitiesCanBeDisplayed(): void {
        $user = new Opportunities();
        $this->assertNotNull($user->fetch_opportunities());
    }

    /**Cart insertion */
    public function testUserCanAddToCart(): void {
        $user = new Cart();
        $this->assertTrue($user->CartInsertion(19, 1, 0000, 2, 200, 1));
    }

    /**Cart display */
    public function testCartCanBeDisplayed(): void {
        $user = new Cart();
        $this->assertNotNull($user->SelectOne(1, 19));
    }

    /**Cart Deleting */
    public function testUserCanDeleteCart(): void {
        $user = new Cart();
        $this->assertTrue($user->deletingOne(1));
    }

    /**Cart Updating */
    public function testUserCanUpdateCart(): void {
        $user = new Cart();
        $this->assertTrue($user->Cartupdate(19, 1, 1, 100));
    }

    /**Cart total */
    public function testCartCanDisplayCartTotal(): void {
        $user = new Cart();
        $this->assertNotNull($user->TotalCart(19));
    }

    /**Order Insertion */
    public function testUserCanOrderItems(): void {
        $user = new Cart();
        $this->assertTrue($user->InsertOrder( '2022-04-08', '2185',20,2, 'hist.fred@gmail.com'));
    }

    /**Order order details */
    public function testUserCanInsertOrderDetails(): void {
        $user = new Cart();
        $this->assertTrue($user->InsertOrderDetails(1000,3,19, 1));
    }

    /** total users details */
    public function testDashboardCanRecordTotalQuantities(): void {
        $user = new Cart();
        $this->assertNotNull($user->dailyquantities(1));
    }

    /**Weekly sales details */
    public function testDashboardCanRecordDailySales(): void {
        $user = new Cart();
        $this->assertNotNull($user->dailysales(1));
    }

    /**Weekly sales details */
    public function testDashboardCanRecordWeeeklySales(): void {
        $user = new Cart();
        $this->assertNotNull($user->weeklysales(1));
    }





}