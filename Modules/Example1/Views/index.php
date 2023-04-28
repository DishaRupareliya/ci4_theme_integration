<?= $this->extend('master') ?>
<?= $this->section('title') ?>Test<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <h1>Datatable!</h1>
    <table id="proposal_table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Subject</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
<script type="text/javascript">
    $(document).ready(function() {
        $('#proposal_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '<?php echo base_url('datatable/getdata'); ?>',
                method: 'POST'
            }
        });
    });
</script>
<?= $this->endSection() ?>