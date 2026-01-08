<?php
namespace juanantoniodatabis\Verifactu\Models\Records;

class InvoiceType {
    const Factura = 'F1'; // Factura (Art. 6, 7.2 y 7.3 del R.D. 1619/2012)
    const Simplificada = 'F2'; // Factura simplificada y facturas sin identificación del destinatario (Art. 6.1.D del R.D. 1619/2012)
    const Sustitutiva = 'F3'; // Factura emitida en sustitución de facturas simplificadas facturadas y declaradas
    const R1 = 'R1'; // Factura rectificativa (Art 80.1 y 80.2 y error fundado en derecho)
    const R2 = 'R2'; // Factura rectificativa (Art. 80.3)
    const R3 = 'R3'; // Factura rectificativa (Art. 80.4)
    const R4 = 'R4'; // Factura rectificativa (Resto)
    const R5 = 'R5'; // Factura rectificativa en facturas simplificadas
}