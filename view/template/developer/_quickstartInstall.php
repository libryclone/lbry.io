<h3>Download</h3>
<table class="quickstart__table">
  <thead>
    <tr>
      <th>macOS <span class="icon-apple"></span></th>
      <th>Linux <span class="icon-linux"></span></th>
      <th>Windows <span class="icon-windows"></span></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="/get/lbrynet.<?php echo Os::OS_OSX ?>.zip" class="link-primary">Download <?php echo $versions[OS::OS_OSX] ?></a></td>
      <td><a href="/get/lbrynet.<?php echo Os::OS_LINUX ?>.zip"  class="link-primary">Download <?php echo $versions[OS::OS_LINUX] ?></a></td>
      <td><a href="/get/lbrynet.<?php echo Os::OS_WINDOWS ?>.zip"  class="link-primary">Download <?php echo $versions[OS::OS_WINDOWS] ?></a></td>
    </tr>
  </tbody>
</table>
<p>
  If you prefer to compile from source or are not on one of the above operating systems, follow
  <a class="link-primary" href="https://github.com/lbryio/lbry/blob/master/INSTALL.md">this guide</a>.
</p>
<h3>Run</h3>
<p>
  Unzip and launch the daemon:
</p>
<p>
  <code class="code-bash"><span class="code-bash__prompt">$</span>lbrynet-daemon</code>
</p>
<p>While running, the daemon will provide a JSON-RPC interface on localhost. We'll learn how to interact with that next.</p>
<?php /*
<div class="meta spacer1">macOS and Windows do not currently bundle the daemon separately. Just launch the full app and the API will still be available. This will be resolved in v0.9.</div>
<div class="meta">The first time you run the daemon, it must catch-up with most recent blockheaders. This can take a few minutes.</div>
  */ ?>