<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunOrderedMigrations extends Command
{
    /**
     * El nombre y la firma del comando de consola.
     *
     * @var string
     */
    protected $signature = 'migrate:ordered';

    /**
     * La descripción del comando de consola.
     *
     * @var string
     */
    protected $description = 'Ejecutar migraciones en un orden específico';

    /**
     * Ejecutar el comando de consola.
     */
    public function handle(): void
    {
        $migrations = [
            '0001_01_01_000000_create_users_table',
            '0001_01_01_000001_create_cache_table',
            '0001_01_01_000002_create_jobs_table',
            '2025_01_14_214805_create_usuarios_table',
            '2025_01_14_214805_create_negocios_table',
            '2025_01_14_214806_create_productos_table',
            '2025_01_14_214806_create_clientes_negocios_table',
            '2025_01_14_214806_create_transacciones_table',
            '2025_01_14_214806_create_historial_puntos_table',
        ];

        foreach ($migrations as $migration) {
            $this->info("Ejecutando migración: $migration");

            $exitCode = $this->call('migrate', [
                '--path' => "database/migrations/{$migration}.php",
            ]);

            if ($exitCode !== 0) {
                $this->error("La migración falló: $migration");
                return;
            }
        }

        $this->info('Todas las migraciones se ejecutaron correctamente en orden.');
    }
}
