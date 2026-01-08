<?php
namespace juanantoniodatabis\Verifactu\Tests\Models;

use juanantoniodatabis\Verifactu\Models\ComputerSystem;
use juanantoniodatabis\Verifactu\Models\Records\Record;
use juanantoniodatabis\Verifactu\Tests\TestUtils;
use PHPUnit\Framework\TestCase;
use UXML\UXML;

final class ComputerSystemTest extends TestCase {
    public function testImportsAndExportsModel(): void {
        // Import model
        $modelXml = TestUtils::getXmlFile(__DIR__ . '/computer-system.xml');
        $computerSystem = ComputerSystem::fromXml($modelXml);

        // Export model
        $exportedXml = UXML::newInstance('container', null, ['xmlns:sum1' => Record::NS]);
        $computerSystem->export($exportedXml);
        $this->assertXmlStringEqualsXmlString($modelXml, $exportedXml->get('sum1:SistemaInformatico')?->asXML() ?? '');
    }
}
