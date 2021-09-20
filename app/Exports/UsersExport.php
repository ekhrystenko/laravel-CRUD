<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::get(['id', 'name', 'email', 'phone']);
    }

    /**
     * @return string[]
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Phone',
        ];
    }

    /**
     * @return int[]
     */
    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 25,
            'C' => 35,
            'D' => 15,
        ];
    }

    /**
     * @param \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet): array
    {
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['#fff'],
                ],
            ],
        ];

        $sheet->getStyle('A1:D101')->applyFromArray($styleArray);

        return [
            1 => ['font' => ['bold' => true]],
            'A' => ['alignment' => ['horizontal' => 'left']],
            'D' => ['alignment' => ['horizontal' => 'left']],
            ];
    }
}
