<?php
class newsTemplate extends template {
    public $newsArticle = '
        {#each news}
            <div class="well well-sm">
                <h3>
                    {title} 
                    <small class="float-end tiny">
                        By {>userName}<br />
                        {date}
                    </small>
                </h3>
                <hr />
                <p>[{text}]</p>
            </div>
        {/each}
    ';
}
