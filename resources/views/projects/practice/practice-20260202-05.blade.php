@extends($layout ?? 'layouts.app')

@section('title', 'ch05. 表格風格 練習')

@section('other-styles')
    <style>
        @media screen and (max-width: 768px) {
            .table-rwd thead {
                display: none;
            }

            .table-rwd tbody tr {
                display: block;
                border: 1px solid var(--crimson-strike);
                margin-top: 15px;
            }

            .table-rwd tbody tr td {
                display: block;
            }

            /* 偽元素 */
            .table-rwd tbody tr td::before {
                content: attr(data-th) " : ";
                font-size: 20px;
                font-weight: 900;
            }
        }
    </style>
@endsection

@section('content')
    <div class="title-01 text-center hachi-maru-pop-regular">表格</div>
    <table class="table table-rwd">
        <thead class="table-dark">
            <tr>
                <th>ISBN</th>
                <th>書名</th>
                <th>價格</th>
                <th>數量</th>
                <th>備註</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-th="ISBN">9789573317241</td>
                <td data-th="書名">哈利波特：神秘的魔法石</td>
                <td data-th="價格">280</td>
                <td data-th="數量">42</td>
                <td data-th="備註">第1集</td>
            </tr>
            <tr>
                <td data-th="ISBN">9789573317586</td>
                <td data-th="書名">哈利波特：消失的密室</td>
                <td data-th="價格">300</td>
                <td data-th="數量">15</td>
                <td data-th="備註">第2集</td>
            </tr>
            <tr>
                <td data-th="ISBN">9789573318002</td>
                <td data-th="書名">哈利波特：阿茲卡班的逃犯</td>
                <td data-th="價格">320</td>
                <td data-th="數量">38</td>
                <td data-th="備註">第3集</td>
            </tr>
            <tr>
                <td data-th="ISBN">9789573318316</td>
                <td data-th="書名">哈利波特：火盃的考驗</td>
                <td data-th="價格">450</td>
                <td data-th="數量">21</td>
                <td data-th="備註">第4集</td>
            </tr>
            <tr>
                <td data-th="ISBN">9789573319863</td>
                <td data-th="書名">哈利波特：鳳凰會的密令</td>
                <td data-th="價格">520</td>
                <td data-th="數量">5</td>
                <td data-th="備註">第5集</td>
            </tr>
            <tr>
                <td data-th="ISBN">9789573321743</td>
                <td data-th="書名">哈利波特：混血王子的背叛</td>
                <td data-th="價格">480</td>
                <td data-th="數量">19</td>
                <td data-th="備註">第6集</td>
            </tr>
            <tr>
                <td data-th="ISBN">9789573323570</td>
                <td data-th="書名">哈利波特：死神的聖物I</td>
                <td data-th="價格">550</td>
                <td data-th="數量">63</td>
                <td data-th="備註">第7集</td>
            </tr>
            <tr>
                <td data-th="ISBN">9789573323570</td>
                <td data-th="書名">哈利波特：死神的聖物II</td>
                <td data-th="價格">550</td>
                <td data-th="數量">63</td>
                <td data-th="備註">第7集</td>
            </tr>
        </tbody>
    </table>
@endsection
