<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use App\Models\Order;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Date;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

use PhpParser\Builder\Class_;

// class UsersExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Order::all();
//     }

    
// }
    
//     class UsersExport implements FromCollection, WithHeadings
// {    
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Order::all();
        
//     }

//     public function headings(): array
//     {
//         return [
//             '#',
//             'Created',
//             'Updated',
//             'Date',
//             'Customer',
//             'Phone',
//             'Arrive Location',
//             'Arrival Time',
//             'Ship_To',
//             'Product1',
//             'Product2',
//             'Product3',
//             'Product4',
//             'Product5',
//             'Product6',
//             'Product7',
//             'Product1_QTY',
//             'Product2_QTY',
//             'Product3_QTY',
//             'Product4_QTY',
//             'Product5_QTY',
//             'Product6_QTY',
//             'Product7_QTY',
//             'Product1_Unit_Price',
//             'Product2_Unit_Price',
//             'Product3_Unit_Price',
//             'Product4_Unit_Price',
//             'Product5_Unit_Price',
//             'Product6_Unit_Price',
//             'Product7_Unit_Price',
//             'Product1_Discount',
//             'Product2_Discount',
//             'Product3_Discount',
//             'Product4_Discount',
//             'Product5_Discount',
//             'Product6_Discount',
//             'Product7_Discount',
//             'Product1_Total',
//             'Product2_Total',
//             'Product3_Total',
//             'Product4_Total',
//             'Product5_Total',
//             'Product6_Total',
//             'Product7_Total',
//             'Total_Discount',
//             'Total_Amount',
//             'Deposit',
//             'Balance',
//         ];
//     }

// }

    class UsersExport implements FromView
    {
        public function view(): View{
            return view('orders.export',['data'=> Order::all()
        ]);
        }
    }