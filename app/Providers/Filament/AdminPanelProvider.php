<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use App\Models\Pegawai;
use Filament\PanelProvider;
use App\Models\PhotoGallery;
use Filament\Pages\Dashboard;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\NewsResource;
use App\Filament\Resources\UserResource;
use Filament\Navigation\NavigationGroup;
use Filament\Widgets\FilamentInfoWidget;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use App\Filament\Resources\PegawaiResource;
use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\InfographicResource;
use Illuminate\Session\Middleware\StartSession;
use App\Filament\Resources\PhotoGalleryResource;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use App\Filament\Resources\NewsResource\Widgets\NewsOverview;
use App\Filament\Resources\CategoryResource\Widgets\NewsChart;
use App\Filament\Resources\CategoryResource\Widgets\NewsByUserChart;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->font('Poppins')
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Gray,
                'primary' => Color::Blue,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])

            ->sidebarCollapsibleOnDesktop()
            ->sidebarFullyCollapsibleOnDesktop()
            ->brandName('PRSPDNF - FH')
            ->favicon(asset('favicon.ico'))
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
                \App\Filament\Resources\NewsResource\Widgets\NewsOverview::class,
                \App\Filament\Resources\CategoryResource\Widgets\NewsChart::class,
                \App\Filament\Resources\CategoryResource\Widgets\NewsByUserChart::class,
            ])

            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder->items([
                    NavigationItem::make('Dashboard')
                        ->icon('heroicon-o-home')
                        ->isActiveWhen(fn(): bool => request()->routeIs('filament.admin.pages.dashboard'))
                        ->url(fn(): string => Dashboard::getUrl()),
                    ...UserResource::getNavigationItems(),
            
                    NavigationItem::make('Konten')
                        ->isActiveWhen(fn(): bool => false)
                        ->icon(null),
            
                    ...CategoryResource::getNavigationItems(),
                    ...NewsResource::getNavigationItems(),
                    ...PhotoGalleryResource::getNavigationItems(),
                    ...PegawaiResource::getNavigationItems(),
                    ...InfographicResource::getNavigationItems(),
                    
                ]);
            })

            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
