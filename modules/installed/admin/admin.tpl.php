<?php

    class adminTemplate extends template {
        public $title = '
            {#if title}
            <h4 class="card-title">{title}</h4>
            {/if}
        ';

        public $widgetTable = '
            <div class="col-md-{size}">
                <div class="card">
                    <div class="card-body">
                        {>title}
                        <table class="table table-condensed table-striped table-bordered no-dt">
                            <thead>
                                <tr>
                                    {#each header.columns}
                                        <th>{name}</th>
                                    {/each}
                                </tr>
                            </thead>
                            <tbody>
                                {#each data}
                                    <tr>
                                        {#each columns}
                                            <th>{{value}}</th>
                                        {/each}
                                    </tr>
                                {/each}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        ';

        public $widgetChart = '
            <div class="col-md-{size}">
                <div class="card">
                    <div class="card-body">
                        {>title}
                        <div class="admin-chart">
                            {#if data}
                                {json_encode data}
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
        ';

        public $widgetHTML = '
            <div class="col-md-{size}">
                {>title}
                {{html}}
            </div>
        ';

        public $widgets = '
            <div class="row g-3">
                {#each widgets}
                    {#if divider}
            </div>
            <div class="row g-3">
                    {else}
                        {{html}}
                    {/if}
                {/each}
            </div>
        ';

    }

