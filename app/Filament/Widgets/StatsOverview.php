<?php

namespace App\Filament\Widgets;

use App\Models\Aduan;
use App\Models\Layanan;
use App\Models\Organisasi;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        $totalAduan = Aduan::count();
        $totalLayanan = Layanan::count();
        $totalOrganisasi = Organisasi::count();

        // Jumlah aduan dengan status 'baru'
        $aduanBaru = Aduan::where('status', 'baru')->count();
        $aduanProses = Aduan::where('status', 'proses')->count();
        $aduanSelesai = Aduan::where('status', 'selesai')->count();
        $aduanMenunggu = Aduan::where('status', 'menunggu_informasi')->count();
        $aduanDitolak = Aduan::where('status', 'ditolak')->count();

        return [
            Stat::make('Jumlah Aduan Terdaftar', $totalAduan)
                ->description('Total aduan')
                ->descriptionIcon('heroicon-o-megaphone')
                ->color('warning'),

            Stat::make('Jumlah Layanan Terdaftar', $totalLayanan)
                ->description('Total layanan')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('success'),

            Stat::make('Jumlah Orgasnisasi Terdaftar', $totalOrganisasi)
                ->description('Total organisasi')
                ->descriptionIcon('heroicon-o-building-office')
                ->color('success'),

            Stat::make('Jumlah Aduan Baru Terdaftar', $aduanBaru)
                ->description('Total aduan baru')
                ->descriptionIcon('heroicon-o-megaphone')
                ->color('gray'),

            Stat::make('Jumlah Aduan Proses Terdaftar', $aduanProses)
                ->description('Total aduan proses')
                ->descriptionIcon('heroicon-o-megaphone')
                ->color('warning'),

            Stat::make('Jumlah Aduan Menunggu Informasi Terdaftar', $aduanMenunggu)
                ->description('Total aduan menunggu informasi')
                ->descriptionIcon('heroicon-o-megaphone')
                ->color('info'),

            Stat::make('Jumlah Aduan Selesai Terdaftar', $aduanSelesai)
                ->description('Total aduan selesai')
                ->descriptionIcon('heroicon-o-megaphone')
                ->color('success'),

            Stat::make('Jumlah Aduan Ditolak', $aduanDitolak)
                ->description('Total aduan ditolak')
                ->descriptionIcon('heroicon-o-megaphone')
                ->color('danger'),
        ];
    }
}
