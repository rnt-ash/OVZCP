<div id="sidebarWrapper" class="well affix">
    <ul class="sidebar-nav nav clearfix list-group">
        {% if permissions.checkPermission('index','general') %}
            <li id="indexNav">{{ link_to('index/index', '<i class="fa fa-tachometer fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Dashboard</span>', 'title':'Dashboard', 'class':'list-group-item') }}</li>
        {% endif %}
        {% if permissions.checkPermission('administration','general') %}
            <li id="administrationNav">{{ link_to('administration/index', '<i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Administration</span>', 'title':'Administration', 'class':'list-group-item') }}</li>
        {% endif %}
        {% if permissions.checkPermission('customers','general') %}
            <li id="customersNav">{{ link_to('customers/tabledata', '<i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Customers</span>', 'title':'Customers', 'class':'list-group-item') }}</li>
        {% endif %}
        {% if permissions.checkPermission('partners','general') %}
            <li id="partnersNav">{{ link_to('partners/tabledata', '<i class="fa fa-handshake-o fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Partners</span>', 'title':'Partners', 'class':'list-group-item') }}</li>
        {% endif %}
        {% if permissions.checkPermission('logins','general') %}
            <li id="loginsNav">{{ link_to('logins/tabledata', '<i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Logins</span>', 'title':'Logins', 'class':'list-group-item') }}</li>
        {% endif %}
        {% if permissions.checkPermission('colocations','general') %}
            <li id="colocationsNav">{{ link_to('colocations/slidedata', '<i class="fa fa-globe fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Colocations</span>', 'title':'Colocations', 'class':'list-group-item') }}</li>
        {% endif %}
        {% if permissions.checkPermission('physical_servers','general') %}
            <li id="physical_serversNav">{{ link_to('physical_servers/slidedata', '<i class="fa fa-server fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Physical Servers</span>', 'title':'Physical Servers', 'class':'list-group-item') }}</li>
        {% endif %}
        {% if permissions.checkPermission('virtual_servers','general') %}
            <li id="virtual_serversNav">{{ link_to('virtual_servers/slidedata', '<i class="fa fa-cube fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Virtual Servers</span>', 'title':'Virtual Servers', 'class':'list-group-item')}}</li>
        {% endif %}
        {% if permissions.checkPermission('jobs','general') %}
            <li id="jobsNav">{{ link_to('jobs/index', '<i class="fa fa-tasks fa-fw" aria-hidden="true"></i>&nbsp; <span class="sideBarText">Jobs</span>', 'title':'Jobs', 'class':'list-group-item') }}</li>
        {% endif %}
    </ul>
</div>