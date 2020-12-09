package 

type Urlinfo struct {
    /* 协议:http/s */
    scheme string

    /* 主机头,和域名不一样,域名只有2位 */
    host string

    /* 类似xx.com. www部分不要 */
    domain string

    /* 端口号 */
    port string

    /* 请求路径 */
    path string

    /* 请求的参数,?之后的内容 */
    query array

}

func NewUrlinfo() *Urlinfo{
    var this = new(Urlinfo)
    return this
}


