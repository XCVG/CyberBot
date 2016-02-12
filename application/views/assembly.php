<div>
    <div id="body">
        <div id="assembler" style="width: 600px; float: left;">
            <form name="assemblyform" id="assemblyform" autocomplete="off">
            <table>
                <tr>
                    <td colspan="2">
                        <h2>HEAD</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        {part0}
                    </td>
                    <td>
                        <select name="selecthead" onchange="assemblyform.submit()">
                            {heads}
                                <option value="{piece}" {selected}>{piece}</option>
                            {/heads}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h2>BODY</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        {part1}
                    </td>
                    <td>
                        <select name="selecctbodys" onchange="assemblyform.submit()">
                            {bodys}
                                <option value="{piece}" {selected}>{piece}</option>
                            {/bodys}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h2>LEGS</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        {part2}
                    </td>
                    <td>
                        <select name="selectlegs" onchange="assemblyform.submit()">
                            {legs}
                                <option value="{piece}" {selected}>{piece}</option>
                            {/legs}
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Assemble">
            </form>
        </div>
        <div id="preview" style="margin-left: 620px;">
            <table>
                <tr>
                    <td>
                        <h2>PREVIEW</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="" alt="head"/>
                        </br>
                        <img src="" alt="body"/>
                        </br>
                        <img src="" alt="legs"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>