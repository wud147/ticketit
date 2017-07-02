<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => '进行中工单',
  'nav-completed-tickets'            => '已结案工单',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => '主题',
  'table-owner'                      => '创建者',
  'table-status'                     => '状态',
  'table-last-updated'               => '更新时间',
  'table-priority'                   => '优先级',
  'table-agent'                      => '客服',
  'table-category'                   => '类别',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => '没有数据',
  'table-info'                       => '正在显示第_START_ - _END_行, 总共 _TOTAL_ 行',
  'table-info-empty'                 => ' ',
  'table-info-filtered'              => '(filtered from _MAX_ total entries)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => '显示 _MENU_ 行',
  'table-loading-results'            => '加载中...',
  'table-processing'                 => '正在处理...',
  'table-search'                     => '搜索:',
  'table-zero-records'               => '没有发现匹配内容',
  'table-paginate-first'             => '第一页',
  'table-paginate-last'              => '最后一页',
  'table-paginate-next'              => '下一页',
  'table-paginate-prev'              => '上一页',
  'table-aria-sort-asc'              => ': activate to sort column ascending',
  'table-aria-sort-desc'             => ': activate to sort column descending',

  'btn-back'                         => '返回',
  'btn-cancel'                       => '取消', // NEW
  'btn-close'                        => '关闭',
  'btn-delete'                       => '删除',
  'btn-edit'                         => '编辑',
  'btn-mark-complete'                => '标记结案',
  'btn-submit'                       => '提交',

  'agent'                            => '客服',
  'category'                         => '类别',
  'colon'                            => ': ',
  'comments'                         => '评论',
  'created'                          => '已经创建',
  'description'                      => '描述',
  'flash-x'                          => '×', // &times;
  'last-update'                      => '更新时间',
  'no-replies'                       => '没有回复.',
  'owner'                            => '创建者',
  'priority'                         => '优先级',
  'reopen-ticket'                    => '重新打开',
  'reply'                            => '回复',
  'responsible'                      => 'Responsible',
  'status'                           => '状态',
  'subject'                          => '主题',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Helpdesk main page',

// tickets/____
  'index-my-tickets'                 => '我的工单',
  'btn-create-new-ticket'            => '新建工单',
  'index-complete-none'              => '没有已经结案的工单',
  'index-active-check'               => 'Be sure to check Active Tickets if you cannot find your ticket.',
  'index-active-none'                => 'There are no active tickets,',
  'index-create-new-ticket'          => 'create new ticket',
  'index-complete-check'             => 'Be sure to check Complete Tickets if you cannot find your ticket.',

  'create-ticket-title'              => 'New Ticket Form',
  'create-new-ticket'                => '新建工单',
  'create-ticket-brief-issue'        => '简单描述您的问题',
  'create-ticket-describe-issue'     => '请在这儿详细描述您的问题',

  'show-ticket-title'                => '工单',
  'show-ticket-js-delete'            => '您确定想删除: ',
  'show-ticket-modal-delete-title'   => '删除工单',
  'show-ticket-modal-delete-message' => '您确定想删除工单: :subject 吗?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Agents :names are added to agents',
  'administrators-are-added-to-administrators'      => 'Administrators :names are added to administrators', //New
  'agents-joined-categories-ok'                     => 'Joined categories successfully',
  'agents-is-removed-from-team'                     => 'Removed agent\s :name from the agent team',
  'administrators-is-removed-from-team'             => 'Removed administrator\s :name from the administrators team', // New

// CategoriesController
  'category-name-has-been-created'   => 'The category :name has been created!',
  'category-name-has-been-modified'  => 'The category :name has been modified!',
  'category-name-has-been-deleted'   => 'The category :name has been deleted!',

// PrioritiesController
  'priority-name-has-been-created'   => 'The priority :name has been created!',
  'priority-name-has-been-modified'  => 'The priority :name has been modified!',
  'priority-name-has-been-deleted'   => 'The priority :name has been deleted!',
  'priority-all-tickets-here'        => 'All priority related tickets here',

// StatusesController
  'status-name-has-been-created'   => 'The status :name has been created!',
  'status-name-has-been-modified'  => 'The status :name has been modified!',
  'status-name-has-been-deleted'   => 'The status :name has been deleted!',
  'status-all-tickets-here'        => 'All status related tickets here',

// CommentsController
  'comment-has-been-added-ok'        => '成功添加评论',

// NotificationsController
  'notify-new-comment-from'          => 'New comment from ',
  'notify-on'                        => ' on ',
  'notify-status-to-complete'        => ' status to Complete',
  'notify-status-to'                 => ' status to ',
  'notify-transferred'               => ' transferred ',
  'notify-to-you'                    => ' to you',
  'notify-created-ticket'            => ' created ticket ',
  'notify-updated'                   => ' updated ',

 // TicketsController
  'the-ticket-has-been-created'      => '工单创建成功!',
  'the-ticket-has-been-modified'     => '工单更新成功!',
  'the-ticket-has-been-deleted'      => '工单 :name 删除成功!',
  'the-ticket-has-been-completed'    => '工单 :name 标记结案成功!',
  'the-ticket-has-been-reopened'     => '工单 :name 重新开起!',
  'you-are-not-permitted-to-do-this' => '您没有权限做此操作!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => '您没有权限访问这个页面!',

];
