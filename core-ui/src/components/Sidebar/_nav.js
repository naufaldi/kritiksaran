export default {
  items: [
    {
      name: 'Dashboard',
      url: '/dashboard',
      icon: 'icon-speedometer',
      badge: {
        variant: 'info',
        text: 'NEW'
      }
    },
    {
      name: 'Blogs',
      url: '/blogs',
      icon: 'icon-puzzle',
      children: [
        {
          name: 'Write',
          url: 'blogs/writes',
          icon: 'icon-pencil'
        },
        {
          name: 'List',
          url: 'blogs/lists',
          icon: 'icon-folder'
        }
      ]
    },
    {
      name: 'Emails',
      url: '/emails',
      icon: 'icon-envelope',
      children: [
        {
          name: 'Write',
          url: 'emails/writes',
          icon: 'icon-pencil'
        },
        {
          name: 'Inbox',
          url: 'emails/inbox',
          icon: 'icon-folder'
        },
        {
          name: 'Outbox',
          url: 'emails/outbox',
          icon:'icon'
        }
        
      ]
    }

  ]
};
